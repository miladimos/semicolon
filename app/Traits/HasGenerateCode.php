<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\ActivationCode;
use Nette\Utils\Random;

trait HasGenerateCode
{
    /**
     * Generate a *0-9* code of a given length
     */
    public function generateCode(int $length = 5): string
    {
        return Random::generate($length, '0-9');
    }

    /**
     * Generate a verification code for a given user
     */
    public function generateActivationCodeFor(
        object $user,
        bool $isResetCode = false
    ): ActivationCode {
        $code = $this->generateCode();
        while (
            ActivationCode::where('code', $code)->first() ||
            strlen($code) !== 5
        ) {
            $code = $this->generateCode();
        }

        return ActivationCode::create([
            'user_id' => $user->id,
            'expired_at' => now()->addMinutes(30),
            'code' => $this->generateCode(),
            'is_reset_code' => $isResetCode,
        ]);
    }

    /**
     * Generate a email verification token for a given user
     */
    public function generateEmailActivationCodeFor(
        object $user,
        bool $isResetCode = false
    ): ActivationCode {
        $code = $this->generateCode();
        while (
            ActivationCode::where('code', $code)->first() ||
            strlen($code) !== 5
        ) {
            $code = $this->generateCode();
        }

        return ActivationCode::create([
            'user_id' => $user->id,
            'expired_at' => now()->addMinutes(30),
            'code' => $this->generateCode(),
            'is_reset_code' => $isResetCode,
        ]);
    }
}
