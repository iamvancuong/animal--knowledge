<?php
namespace App\Http;

use Error;
use Illuminate\Support\Facades\Log;

class MessageContent
{
    protected static $messages;

    public static function loadMessages()
    {
        $filePath = resource_path('lang\en\messages.php');
        if (file_exists($filePath)) {
            self::$messages = include($filePath);
        } else {
            self::$messages = [];
        }
    }

    public static function getMessage($key)
    {
        return array_key_exists($key, self::$messages) ? self::$messages[$key] : null;
    }
}
