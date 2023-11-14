<?php

namespace App\Models;


use PhpParser\Node\Stmt\Static_;
class dataTreasure
{
    private static  $data_treasure = [
        [
            "image" => "../assets/TC-1.png",
            "nama" => "Taman Karang Resik",
            "tempat" => "Park"
        ],
        [
            "image" => "../assets/TC-2.png",
            "nama" => "Alun-Alun Tasikmalaya",
            "tempat" => "Park"
        ],
        [
            "image" => "../assets/TC-3.png",
            "nama" => "Mayasari Plaza",
            "tempat" => "Shopping Mall"
        ],
        [
            "image" => "../assets/TC-4.png",
            "nama" => "Masjid Agung Tasikmalaya",
            "tempat" => "Mosque"
        ],
    ];

    public static function all()
    {
       return self::$data_treasure;
    }
}