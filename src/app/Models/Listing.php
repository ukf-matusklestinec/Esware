<?php
namespace App\Models;

class Listing {
    public static function all(){
        return [[
            'idPonuky' => 1,
            'Nazov' => 'BLA1',
            'Napln_prace' => 'dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd'
        ],
            [
                'idPonuky' => 2,
                'Nazov' => 'BLA2',
                'Napln_prace' => 'dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd'
            ],
            [
                'idPonuky' => 3,
                'Nazov' => 'BLA3',
                'Napln_prace' => 'dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd'
            ],
            [
                'idPonuky' => 4,
                'Nazov' => 'BLA4',
                'Napln_prace' => 'dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd
            dasdasdasadssdaasdasdasd dasdasdasadssdaasdasdasd'
            ]
        ];
    }
    public static function find($idPonuky) {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['idPonuky'] == $idPonuky) {
                return $listing;
            }
        }
    }
}
