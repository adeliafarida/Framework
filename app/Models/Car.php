<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    private static $greeting =[[
        'awalan' => 'Haiii semuanyaaa',
        'keuntungan' => 'Menjadi lebih baik',
        'keberuntungan' => 'apapun yang terjadi',
        'sikap' => 'menerima feedback'

    ],
    [
        'awalan'=> 'semangat',
        'keuntungan' => 'mejadi apa yang kamu inginkan',
        'keberuntungan' => 'terima dengan baik',
        'sikap' => 'lakukanlah sesuka hatimu'
    ]];


    public static function getGreeting ()
    {
        return collect(self::$greeting);
    }

}
