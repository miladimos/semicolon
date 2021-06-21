<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

trait UpdatesPassword
{
    /**
     * Update the user's password.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
            'current_password' => 'required|hash:'.$request->user()->password,
        ]);

        return tap($request->user())->update([
            'password' => Hash::make($request->password),
        ]);
    }
}
