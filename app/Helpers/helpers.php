<?php

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\HtmlString;


// Start Users / Auth Helpers

if (!function_exists("getUserIP")) {
    function getUserIP()
    {
        $client = $_SERVER['HTTP_CLIENT_IP'];
        $forward = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }
}

if (!function_exists('is_user_online')) {
    function is_user_online($user_id): bool
    {
        if (cache()->has('user-is-online-' . $user_id))
            return true;
        else
            return false;
    }
}

if (!function_exists('svg')) {
    function svg($filename): HtmlString
    {
        return new HtmlString(
            file_get_contents(resource_path("svg/{$filename}.svg"))
        );
    }
}

if (!function_exists('is_office_open')) {
    function is_office_open(): bool
    {
        if (!now()->isWeekday()) {
            return false;
        }

        $startTime = now()->hour(9)->minute(0);
        $endTime = now()->hour(17)->minute(30);

        return now()->between($startTime, $endTime);
    }
}

if (!function_exists('gravatar_img')) {

    function gravatar_img(string $name, int $size = 240): HtmlString
    {
        $gravatarId = md5(strtolower(trim($name)));

        return new HtmlString('<img src="https://gravatar.com/avatar/' . $gravatarId . '?s= ' . $size . '>');
    }
}

if (!function_exists('mailto')) {

    function mailto(string $subject, string $body): string
    {
        $subject = rawurlencode(htmlspecialchars_decode($subject));

        $body = rawurlencode(htmlspecialchars_decode($body));

        return "mailto:info@spatie.be?subject={$subject}&body={$body}";
    }
}

if (!function_exists('formatBytes')) {

    function formatBytes($size, $precision = 2)
    {
        $base = log((float)$size, 1024);
        $suffixes = ['', 'K', 'M', 'G', 'T'];

        return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
    }
}

if (!function_exists('user')) {
    function user($guard = 'web')
    {
        if (!Auth::check()) {
            return false;
        }

        return auth($guard)->user();
    }
}

if (!function_exists('id')) {
    function id($guard = 'web')
    {
        return auth($guard)->id();
    }
}

if (!function_exists('username')) {
    function username($guard = 'web')
    {
        return auth($guard)->user()->username;
    }
}

if (!function_exists('email')) {
    function email($guard = 'web')
    {
        return auth($guard)->user()->email;
    }
}

/**
 * Return true if current user is guest, otherwise return false.
 * @return bool
 */
if (!function_exists('isGuest')) {
    function isGuest($guard = 'web'): bool
    {
        return Auth::guard($guard)->guest();
    }
}

if (!function_exists("isActiveMenu")) {
    function isActiveMenu($key, $class = 'active')
    {
        if (is_array($key)) {
            return in_array(Route::currentRouteName(), $key) ? $class : '';
        }
        return Route::currentRouteName() == $key ? $class : '';
    }
}

if (!function_exists("convertToEastern")) {
    function convertToEastern($string)
    {
        $eastern = ["۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹", "۰"];
        $western = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        return str_replace($western, $eastern, $string);
    }
}

if (!function_exists("convertToWestern")) {
    function convertToWestern($string)
    {
        $eastern = ["۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹", "۰"];
        $western = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        return str_replace($eastern, $western, $string);
    }
}

if (!function_exists("createOPTCode")) {
    function createOTPCode()
    {
        return random_int(100000, 999999);
    }
}

if (!function_exists("createEmailToken")) {
    function createEmailToken($length = 60)
    {
        return Str::random($length);
    }
}

if (!function_exists('generateToken')) {
    function generateToken()
    {
        // This is set in the .env file
        $key = config('app.key');

        // Illuminate\Support\Str;
        if (Str::startsWith($key, 'base64:')) {
            $key = base64_decode(substr($key, 7));
        }
        return hash_hmac('sha256', Str::random(40), $key);
    }
}

if (!function_exists('generateTicketCode')) {
    function generateTicketCode()
    {
        $digits = array_merge(range(0, 9), range(0, 9), range(0, 9));
        $sChars = range('a', 'z');
        $cChars = range('A', 'Z');
        $chars = array_merge($digits, $sChars, $cChars);
        $arrToStr = implode("", $chars);
        $shuf = str_shuffle($arrToStr);
        $code = substr($shuf, 0, 8);
        return $code;
    }
}

if (!function_exists('decodeBase64File')) {
    function decodeBase64File($encodedFile)
    {
        // اینجا اطلاعات اضافی رو پاک میکنم تا کد اصلی رو بگیرم
        $file = str_replace(' ', '+', $encodedFile);
        $file = substr($file, strpos($file, ';base64,') + 8);
        $decodedFile = base64_decode($file);

        // با کمک توابع پی اچ پی، مشخصات فایل رو بررسی می کنم
        $fileMimeType = finfo_buffer(finfo_open(), $decodedFile, FILEINFO_MIME_TYPE);
        $fileExt = substr($fileMimeType, strpos($fileMimeType, '/') + 1);

        return [
            'file' => $decodedFile, // فایل آماده برای ذخیره سازی در دیسک
            'mime' => $fileMimeType, // نوع فایل
            'ext' => $fileExt, // اکستنشن فایل
            'size' => (int)strlen($decodedFile) // حجم فایل با واحد بایت
        ];
    }
}

if (!function_exists('validate')) {
    function validate($fields, $rules): bool
    {
        if (!is_array($fields)) {
            $fields = ['default' => $fields];
        }

        if (!is_array($rules)) {
            $rules = ['default' => $rules];
        }

        return Validator::make($fields, $rules)->passes();
    }
}

if (!function_exists('locale')) {
    function locale(): string
    {
        $locale = app()->getLocale();
        if (!$locale) {
            return config('app.fallback_locale');
        }

        return $locale;
    }
}

if (!function_exists('queries')) {

    function queries($last = false, $dbConnectionName = '')
    {
        if ($dbConnectionName != '') {
            $queries = DB::connection($dbConnectionName)->getQueryLog();
        } else {
            $queries = DB::getQueryLog();
        }

        foreach ($queries as &$query) {
            $query['look'] = query_interpolate($query['query'], $query['bindings']);
        }

        if ($last) {
            return end($queries);
        }
        return $queries;
    }
}

if (!function_exists('query_table')) {

    function query_table(): string
    {
        $queries = queries();
        $html = '<table style="background-color: #FFFF00;border: 1px solid #000000;color: #000000;padding-left: 10px;padding-right: 10px;width: 100%;">';
        foreach ($queries as $query) {
            $html .= '<tr style="border-top: 1px dashed #000000;"><td style="padding:8px;">' . e($query['look']) . '</td><td style="padding:8px;">' . e($query['time']) . '</td></tr>';
        }

        return $html . '</table>';
    }
}

if (!function_exists('query_interpolate')) {

    function query_interpolate($query, $params)
    {
        $keys = array();
        $values = $params;
        foreach ($params as $key => $value) {
            if (is_string($key)) {
                $keys[] = '/:' . $key . '/';
            } else {
                $keys[] = '/[?]/';
            }
            if (is_array($value)) {
                $values[$key] = implode(',', $value);
            }
            if (is_null($value)) {
                $values[$key] = 'NULL';
            }
        }
        // Walk the array to see if we can add single-quotes to strings
        array_walk($values, function (&$v) {
            if (!is_numeric($v) && $v != "NULL") $v = "'" . $v . "'";
        });
        $query = preg_replace($keys, $values, $query, 1, $count);
        return $query;
    }
}

if (!function_exists('humanFilesize')) {
    function humanFilesize()
    {
        return function ($value, $precision = 1): string {
            if ($value >= 1000000000000) {
                $value = round($value / (1024 * 1024 * 1024 * 1024), $precision);
                $unit = 'TB';
            } elseif ($value >= 1000000000) {
                $value = round($value / (1024 * 1024 * 1024), $precision);
                $unit = 'GB';
            } elseif ($value >= 1000000) {
                $value = round($value / (1024 * 1024), $precision);
                $unit = 'MB';
            } elseif ($value >= 1000) {
                $value = round($value / (1024), $precision);
                $unit = 'KB';
            } else {
                $unit = 'Bytes';
                return number_format($value) . ' ' . $unit;
            }

            return number_format($value, $precision) . ' ' . $unit;
        };
    }
}

if (!function_exists('url')) {

    function url(): callable
    {
        return function ($value = null): ?string {
            if ($value && !Str::startsWith($value, ['http://', 'https://'])) {
                $value = 'https://' . $value;
            }

            return $value;
        };
    }
}

if (!function_exists('faker')) {
    function faker($locale = "en"): Generator
    {
        return Factory::create($locale);
    }
}
