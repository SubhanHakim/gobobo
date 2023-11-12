<?php

namespace App\Models;


use PhpParser\Node\Stmt\Static_;
class dataPopular
{
    private static  $data_popular = [
        [
            "image"=>"assets/pp-1.png",
            "city"=>"MALANG",
            "total"=>15.789
        ],
        [
            "image"=>"assets/pp-2.png",
            "city"=>"MALUKU",
            "total"=>11.008
        ],
        [
            "image"=>"assets/pp-3.png",
            "city"=>"SUMATERA",
            "total"=>9.899
        ],
        [
            "image"=>"assets/pp-4.png",
            "city"=>"SURABAYA",
            "total"=>7.786
        ],
        [
            "image"=>"assets/pp-5.png",
            "city"=>"JAKARTA",
            "total"=>6.999
        ],
    ];

    public static function all()
    {
       return self::$data_popular;
    }
}
