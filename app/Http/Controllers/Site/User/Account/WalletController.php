<?php

namespace App\Http\Controllers\Site\User\Account;

use SoapClient;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class WalletController extends Controller
{
    public function wallet()
    {
        return view('site.account.wallet');
    }

    public function payment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
        ]);

        if ($validator->fails()) {
            alert()->error('خطا');
            return back();
        }

        $amount = $request->amount;

        $user = auth()->user();

        $MerchantID = '61187f93-e161-4b65-917a-47c91b3aa54c'; //Required
        $Amount = $amount; //Amount will be based on Toman - Required
        $Description = 'شارژ کیف پول'; // Required
        $Email = $user->email; // Optional
        $Mobile = $user->phone; // Optional
        $CallbackURL = url('/account/wallet/payment/callback'); // Required

        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
            [
                'MerchantID' => $MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL,
            ]
        );

        if ($result->Status === 100) {
            auth()->user()->payments()->create([
                'resnumber' =>  $result->Authority,
                'amount' => $amount,
                'type'     => 'شارژ کیف پول'
            ]);
            return redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result->Authority);
        } else {
            echo 'ERR ' . $result->Status;
        }
    }

    public function callback(Request $request)
    {
        $MerchantID = '61187f93-e161-4b65-917a-47c91b3aa54c';
        $Authority = $request->get('Authority');
        $user = auth()->user();

        $payment = Payment::where('resnumber', $Authority)->first();

        if ($request->Status === 'OK') {

            $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $payment->amount,
                ]
            );

            if ($result->Status == 100) {

                if ($this->chargeWalletAmount($user, $payment->amount)) {
                    $payment->update([
                        'payment' => true
                    ]);
                    alert()->success('Transation success. RefID:' . $result->RefID, 'fsd');
                    return back();
                }
            } else {
                alert()->error('Transation failed. Status:' .  $result->Status);
                return back();
            }
        } else {
            alert()->error('Transaction canceled by use', 'Transaction canceled by use');
            return back();
        }
    }

    public function chargeWalletAmount($user, $amount)
    {
        $currentAmount = $user->wallet->amount;
        $chargedAmount = $amount;

        $newAmount = $currentAmount + $chargedAmount;
        $user->wallet()->update([
            'amount' => $newAmount
        ]);

        return true;
    }
}
