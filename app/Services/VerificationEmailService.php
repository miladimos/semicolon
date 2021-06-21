<?php

namespace App\Services;

class VerificationEmailService
{
    public static function storeToken($userId, $token, $time = 120)
    {
        cache()->set('verfiy_email_code' . $userId, $token, $time);
    }

    public static function getToken($id)
    {
        return cache()->get('verify_email_code_'. $id);
    }

    public static function hasToken($id)
    {
        return cache()->has('verify_email_code_'. $id);
    }

    public static function deleteToken($id)
    {
        return cache()->delete('verify_email_code_'. $id);
    }
}
