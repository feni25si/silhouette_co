<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
     public function index()
    {
        $profiles = [
            [
                'id' => 1,
                'name' => 'Ukuran Saya',
                'owner' => 'Diri Sendiri',
                'updated_at' => '23 November 2026',
            ],
            [
                'id' => 2,
                'name' => 'Ukuran Ibu',
                'owner' => 'Ibu',
                'updated_at' => '20 November 2026',
            ],
            [
                'id' => 3,
                'name' => 'Ukuran Adik',
                'owner' => 'Adik',
                'updated_at' => '18 November 2026',
            ],
        ];

        return view('customer.ukuran.index', compact('profiles'));
    }

    public function create() {
        return view('customer.ukuran.create');
    }
}
