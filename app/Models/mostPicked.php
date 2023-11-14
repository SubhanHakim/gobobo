<?php

namespace App\Models;

use PhpParser\Node\Stmt\Static_;

class mostPicked
{
    private static $data_most =  [
        [
            "title" => "Istana Bunga",
            "slug" => "istana-bunga",
            "kota" => "Bandung",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-1.png",
            "desc" => "Villa Grand Mutiara menawarkan berbagai fasilitas yang dapat memanjakan pengunjungnya. Dengan arsitektur yang elegan, villa ini dilengkapi dengan berbagai jenis kamar yang luas dan nyaman, sehingga pengunjung dapat merasa seperti berada di rumah sendiri. Setiap kamar dilengkapi dengan fasilitas modern, termasuk kamar mandi pribadi, pendingin udara, dan televisi layar datar.

            Selain kamar-kamar yang nyaman, Villa Grand Mutiara juga memiliki fasilitas lain yang dapat dinikmati oleh pengunjung. Terdapat sebuah kolam renang yang indah, dikelilingi oleh taman yang asri dan pemandangan alam yang menakjubkan. Villa ini juga memiliki restoran yang menyajikan berbagai hidangan lezat, sehingga pengunjung dapat menikmati kuliner khas Indonesia dan internasional.
            
            Selain itu, lokasi Villa Grand Mutiara sangat strategis, karena terletak dekat dengan berbagai atraksi wisata di Tasikmalaya, termasuk situs sejarah dan alam yang menarik. Ini membuat villa ini menjadi tempat yang sempurna untuk menjelajahi pesona Tasikmalaya sambil menikmati kenyamanan dan kemewahan."
        ],
        [
            "title" => "Lentera",
            "slug" => "lentera",
            "kota" => "Flores",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-2.png",
            "desc" => "Villa Grand Mutiara menawarkan berbagai fasilitas yang dapat memanjakan pengunjungnya. Dengan arsitektur yang elegan, villa ini dilengkapi dengan berbagai jenis kamar yang luas dan nyaman, sehingga pengunjung dapat merasa seperti berada di rumah sendiri. Setiap kamar dilengkapi dengan fasilitas modern, termasuk kamar mandi pribadi, pendingin udara, dan televisi layar datar.

            Selain kamar-kamar yang nyaman, Villa Grand Mutiara juga memiliki fasilitas lain yang dapat dinikmati oleh pengunjung. Terdapat sebuah kolam renang yang indah, dikelilingi oleh taman yang asri dan pemandangan alam yang menakjubkan. Villa ini juga memiliki restoran yang menyajikan berbagai hidangan lezat, sehingga pengunjung dapat menikmati kuliner khas Indonesia dan internasional.
            
            Selain itu, lokasi Villa Grand Mutiara sangat strategis, karena terletak dekat dengan berbagai atraksi wisata di Tasikmalaya, termasuk situs sejarah dan alam yang menarik. Ini membuat villa ini menjadi tempat yang sempurna untuk menjelajahi pesona Tasikmalaya sambil menikmati kenyamanan dan kemewahan."
        ],
        [
            "title" => "Virsty Villafe",
            "slug" => "virsty-villafe",
            "kota" => "Garut",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-3.png",
            "desc" => "Villa Grand Mutiara menawarkan berbagai fasilitas yang dapat memanjakan pengunjungnya. Dengan arsitektur yang elegan, villa ini dilengkapi dengan berbagai jenis kamar yang luas dan nyaman, sehingga pengunjung dapat merasa seperti berada di rumah sendiri. Setiap kamar dilengkapi dengan fasilitas modern, termasuk kamar mandi pribadi, pendingin udara, dan televisi layar datar.

            Selain kamar-kamar yang nyaman, Villa Grand Mutiara juga memiliki fasilitas lain yang dapat dinikmati oleh pengunjung. Terdapat sebuah kolam renang yang indah, dikelilingi oleh taman yang asri dan pemandangan alam yang menakjubkan. Villa ini juga memiliki restoran yang menyajikan berbagai hidangan lezat, sehingga pengunjung dapat menikmati kuliner khas Indonesia dan internasional.
            
            Selain itu, lokasi Villa Grand Mutiara sangat strategis, karena terletak dekat dengan berbagai atraksi wisata di Tasikmalaya, termasuk situs sejarah dan alam yang menarik. Ini membuat villa ini menjadi tempat yang sempurna untuk menjelajahi pesona Tasikmalaya sambil menikmati kenyamanan dan kemewahan."

        ],
        [
            "title" => "Grand Mutiara",
            "slug" => "grand-mutiara",
            "kota" => "Tasikmalaya",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-4.png",
            "desc" => "Villa Grand Mutiara menawarkan berbagai fasilitas yang dapat memanjakan pengunjungnya. Dengan arsitektur yang elegan, villa ini dilengkapi dengan berbagai jenis kamar yang luas dan nyaman, sehingga pengunjung dapat merasa seperti berada di rumah sendiri. Setiap kamar dilengkapi dengan fasilitas modern, termasuk kamar mandi pribadi, pendingin udara, dan televisi layar datar.

            Selain kamar-kamar yang nyaman, Villa Grand Mutiara juga memiliki fasilitas lain yang dapat dinikmati oleh pengunjung. Terdapat sebuah kolam renang yang indah, dikelilingi oleh taman yang asri dan pemandangan alam yang menakjubkan. Villa ini juga memiliki restoran yang menyajikan berbagai hidangan lezat, sehingga pengunjung dapat menikmati kuliner khas Indonesia dan internasional.
            
            Selain itu, lokasi Villa Grand Mutiara sangat strategis, karena terletak dekat dengan berbagai atraksi wisata di Tasikmalaya, termasuk situs sejarah dan alam yang menarik. Ini membuat villa ini menjadi tempat yang sempurna untuk menjelajahi pesona Tasikmalaya sambil menikmati kenyamanan dan kemewahan."
        ],
        [
            "title" => "Grand Mutiara",
            "slug" => "grand-mutiara",
            "kota" => "Tasikmalaya",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-4.png",
            "desc" => "Villa Grand Mutiara menawarkan berbagai fasilitas yang dapat memanjakan pengunjungnya. Dengan arsitektur yang elegan, villa ini dilengkapi dengan berbagai jenis kamar yang luas dan nyaman, sehingga pengunjung dapat merasa seperti berada di rumah sendiri. Setiap kamar dilengkapi dengan fasilitas modern, termasuk kamar mandi pribadi, pendingin udara, dan televisi layar datar.

            Selain kamar-kamar yang nyaman, Villa Grand Mutiara juga memiliki fasilitas lain yang dapat dinikmati oleh pengunjung. Terdapat sebuah kolam renang yang indah, dikelilingi oleh taman yang asri dan pemandangan alam yang menakjubkan. Villa ini juga memiliki restoran yang menyajikan berbagai hidangan lezat, sehingga pengunjung dapat menikmati kuliner khas Indonesia dan internasional.
            
            Selain itu, lokasi Villa Grand Mutiara sangat strategis, karena terletak dekat dengan berbagai atraksi wisata di Tasikmalaya, termasuk situs sejarah dan alam yang menarik. Ini membuat villa ini menjadi tempat yang sempurna untuk menjelajahi pesona Tasikmalaya sambil menikmati kenyamanan dan kemewahan."
        ],
        [
            "title" => "Grand Mutiara",
            "slug" => "grand-mutiara",
            "kota" => "Tasikmalaya",
            "country" => "Indonesia",
            "status" => "Check",
            "image" => "assets/bg-4.png",
            "desc" => "Villa Grand Mutiara menawarkan berbagai fasilitas yang dapat memanjakan pengunjungnya. Dengan arsitektur yang elegan, villa ini dilengkapi dengan berbagai jenis kamar yang luas dan nyaman, sehingga pengunjung dapat merasa seperti berada di rumah sendiri. Setiap kamar dilengkapi dengan fasilitas modern, termasuk kamar mandi pribadi, pendingin udara, dan televisi layar datar.

            Selain kamar-kamar yang nyaman, Villa Grand Mutiara juga memiliki fasilitas lain yang dapat dinikmati oleh pengunjung. Terdapat sebuah kolam renang yang indah, dikelilingi oleh taman yang asri dan pemandangan alam yang menakjubkan. Villa ini juga memiliki restoran yang menyajikan berbagai hidangan lezat, sehingga pengunjung dapat menikmati kuliner khas Indonesia dan internasional.
            
            Selain itu, lokasi Villa Grand Mutiara sangat strategis, karena terletak dekat dengan berbagai atraksi wisata di Tasikmalaya, termasuk situs sejarah dan alam yang menarik. Ini membuat villa ini menjadi tempat yang sempurna untuk menjelajahi pesona Tasikmalaya sambil menikmati kenyamanan dan kemewahan."
        ],
    ];

    public static function all()
    {
        return collect(self::$data_most);
    }

    public static function find($slug) {
        $details = static::all();

        return $details->firstWhere('slug', $slug);
    }
}
