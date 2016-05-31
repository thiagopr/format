<?php

namespace ThiagoPr\DisplayFormat;

class FormatNumber {

    public static function padLeft($value, $lenght, $str_pad = "0") {
        return str_pad($value, $lenght, $str_pad, STR_PAD_LEFT);
    }

    public static function money($value){
        $value = (double)$value;
        return number_format($value, 2, ',', '.');
    }

    function percentual($value, $length){
        $value = (double)$value;
        return number_format($value, $length, ',', '.');
    }

}