<?php

namespace App\Models;


use PhpParser\Node\Stmt\Static_;
class dataTotal
{
    private static  $data_terbaru = [
        [
            "title" => "travelers",
            "total" => 80409,
            "image" => "assets/bed.svg"
        ],
        [
            "title" => "treasure",
            "total" => 987,
            "image" => "assets/photo_camera.svg"
        ],
        [
            "title" => "cities",
            "total" => 873,
            "image" => "assets/add_location_alt.svg"
        ]
    ];

    public static function all()
    {
       return self::$data_terbaru;
    }
}
