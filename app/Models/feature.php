<?php

namespace App\Models;



class feature
{
  private static $data_feature = [
    [
        "title" => "Bedroom",
        "qty" => "6",
        "img" => "../assets/feature/ic_bedroom.svg"
    ],
    [
        "title" => "Living Room",
        "qty" => "2",
        "img" => "../assets/feature/ic_livingroom.svg"
    ],
    [
        "title" => "Bathroom",
        "qty" => "4",
        "img" => "../assets/feature/ic_bedroom_1.svg"
    ],
    [
        "title" => "Dinning Room",
        "qty" => "1",
        "img" => "../assets/feature/ic_diningroom.svg"
    ],
    [
        "title" => "Free Wifi",
        "qty" => "1",
        "img" => "../assets/feature/ic_wifi.svg"
    ],
    [
        "title" => "Ac Units",
        "qty" => "8",
        "img" => "../assets/feature/ic_ac.svg"
    ],
    [
        "title" => "Refigerator",
        "qty" => "1",
        "img" => "../assets/feature/ic_kulkas.svg"
    ],
    [
        "title" => "Television",
        "qty" => "3",
        "img" => "../assets/feature/ic_tv.svg"
    ]
  ];

  public static function all() {
    return self::$data_feature;
  } 
}
