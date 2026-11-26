<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeasurementProfile;

class MeasurementController extends Controller
{
     public function index()
    {
        $profiles = MeasurementProfile::latest()->get();

        return view('customer.ukuran.index', compact('profiles'));
    }

    public function create() {
        return view('customer.ukuran.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'profile_name' => 'required|string|max:255',
            'owner' => 'required|string|max:255',

            'lingkar_dada' => 'nullable|numeric|min:0',
            'lingkar_pinggang' => 'nullable|numeric|min:0',
            'lingkar_pinggul' => 'nullable|numeric|min:0',
            'tinggi_pinggul' => 'nullable|numeric|min:0',
            'lebar_bahu' => 'nullable|numeric|min:0',
            'panjang_badan' => 'nullable|numeric|min:0',
            'panjang_muka' => 'nullable|numeric|min:0',
            'panjang_punggung' => 'nullable|numeric|min:0',
            'panjang_dress' => 'nullable|numeric|min:0',
            'panjang_bawahan' => 'nullable|numeric|min:0',
            'lingkar_pisak' => 'nullable|numeric|min:0',
            'lingkar_paha' => 'nullable|numeric|min:0',
            'lingkar_bawah_celana' => 'nullable|numeric|min:0',
            'lingkar_ketiak' => 'nullable|numeric|min:0',
            'panjang_lengan' => 'nullable|numeric|min:0',
            'lingkar_lengan_atas' => 'nullable|numeric|min:0',
            'lingkar_pergelangan_tangan' => 'nullable|numeric|min:0',
            'tinggi_puncak_dada' => 'nullable|numeric|min:0',
            'jarak_puncak_dada' => 'nullable|numeric|min:0',
            'lingkar_leher' => 'nullable|numeric|min:0',
        ]);

        MeasurementProfile::create($validated);

        return redirect()
            ->route('customer.ukuran.index')
            ->with('success', 'Profil ukuran berhasil disimpan!');
    }
}
