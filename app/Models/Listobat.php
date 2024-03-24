<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listobat
{
    use HasFactory;
        private  $obat =[[
            'id'   => '1',
            'obat' => 'Obat Cair',
            'name' => 'Antimo',
            'keterangan' => 'Antimo mengandung dimenhydrinate atau ekstrak tumbuhan yang bermanfaat untuk mencegah dan meredakan gejala mabuk perjalanan dan masuk angin.'
        ],
        [
            'id'   => '2',
            'obat' => 'Obat Padat',
            'name' => 'Mixagrip',
            'keterangan' => 'Mixagrip bermanfaat untuk meredakan gejala flu dan batuk, seperti bersin-bersin, hidung tersumbat, demam, dan sakit kepala.'
        ],
        [
            'id'   => '3',
            'obat' => 'Obat Cair',
            'name' => 'Panadol',
            'keterangan' => 'obat yang mengandung paracetamol berfungsi sebagai bahan aktif untuk meredakan nyeri dan demam'
        ]
        ];

        public function all ()
        {
            return collect($this->obat);
        }

        public  function find ($id)
        {
            $jenis = $this->all();

            return $jenis->firstWhere('id',$id);
        }
}
