<?php

namespace App\Models;

use PhpParser\Node\Stmt\Static_;

class mostPicked
{
    private static $data_most =  [
        [
            "title" => "Istana Bunga",
            "kota" => "Bandung",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-1.png"
        ],
        [
            "title" => "Lentera",
            "kota" => "Flores",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-2.png"
        ],
        [
            "title" => "Virsty Villafe",
            "kota" => "Garut",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-3.png"
        ],
        [
            "title" => "Grand Mutiara",
            "kota" => "Tasikmalaya",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-4.png"
        ],
        [
            "title" => "Grand Mutiara",
            "kota" => "Tasikmalaya",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-4.png"
        ],
        [
            "title" => "Grand Mutiara",
            "kota" => "Tasikmalaya",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-4.png"
        ],
    ];

    public static function all()
    {
        return self::$data_most;
    }
}
