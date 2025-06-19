<?php
class Helper
{
    public static function redirect($page)
    {
        header("location:$page");
    }

    public static function filter($str)
    {
        // မလိုအပ်တဲ့ char တွေကို ပယ်ဖျက်ခြင်း
        $str = trim($str); // space remove
        $str = stripslashes($str);   // backslash remove
        $str = htmlspecialchars($str); // html tags remove
        return $str;
    }
}
