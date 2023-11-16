<?php

namespace App\Models;


use PhpParser\Node\Stmt\Static_;
class dataPopular
{
    private static  $data_popular = [
        [
            "image"=>"assets/pp-1.png",
            "title"=> "testing1",
            "slug"=> "malang",
            "city"=>"MALANG",
            "total"=>15.789
        ],
        [
            "image"=>"assets/pp-2.png",
            "title"=> "testing2",
            "slug"=> "maluku",
            "city"=>"MALUKU",
            "total"=>11.008
        ],
        [
            "image"=>"assets/pp-3.png",
            "title"=> "testing3",
            "slug"=> "sumatera",
            "city"=>"SUMATERA",
            "total"=>9.899
        ],
        [
            "image"=>"assets/pp-4.png",
            "title"=> "testing4",
            "slug"=> "surabaya",
            "city"=>"SURABAYA",
            "total"=>7.786
        ],
        [
            "image"=>"assets/pp-5.png",
            "title"=> "testing5",
            "slug"=> "jakarta",
            "city"=>"JAKARTA",
            "total"=>6.999
        ],
    ];

    public static function all()
    {
       return collect(self::$data_popular);
    }
}
