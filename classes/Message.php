<?php
/* Межстраничные сообщения используюцие сессию */
session_start();

class Message
{
    private static array $message;
    public static function make($text, $type)
    {
        self::$message['text'] = $text;
        self::$message['type'] = $type;
        $_SESSION['msg'] = self::$message;
    }

    public static function displayMessage() {
        echo $_SESSION['msg']['text'];
    }
    public static function displayType() {
        echo $_SESSION['msg']['type'];
    }
    public static function delete() {
        unset($_SESSION['msg']);
    }
}