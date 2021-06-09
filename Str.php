<?php

namespace xooooooox\nonce;


/**
 * Class Str
 */
class Str
{

    /**
     * @param int $length
     * @param string $str
     * @return string
     */
    public static function Nonce(int $length = 6, string $str = '') : string {
        if ($length < 1) {
            $length = 1;
        }
        if ($str === '') {
            $str = '0123456789';
        }
        $len = strlen($str);
        $nonce = '';
        for ( $i = 0; $i < $length; $i++ )  {
            $nonce .= substr($str, mt_rand(0, $len-1), 1);
        }
        return $nonce;
    }

}