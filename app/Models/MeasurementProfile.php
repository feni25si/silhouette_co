<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeasurementProfile extends Model
{
    protected $fillable = [
        'profile_name',
        'owner',
        'lingkar_dada',
        'lingkar_pinggang',
        'lingkar_pinggul',
        'tinggi_pinggul',
        'lebar_bahu',
        'panjang_badan',
        'panjang_muka',
        'panjang_punggung',
        'panjang_dress',
        'panjang_bawahan',
        'lingkar_pisak',
        'lingkar_paha',
        'lingkar_bawah_celana',
        'lingkar_ketiak',
        'panjang_lengan',
        'lingkar_lengan_atas',
        'lingkar_pergelangan_tangan',
        'tinggi_puncak_dada',
        'jarak_puncak_dada',
        'lingkar_leher',
    ];
}
