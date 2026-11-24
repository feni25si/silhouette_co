<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'id' => 1,
                'name' => 'Modern Kebaya',
                'category' => 'Traditional Wear',
                'image' => 'https://placehold.co/600x750/E8D5D0/493D39?text=Modern+Kebaya',
                'description' => 'Kebaya modern dengan desain elegan dan detail jahitan yang rapi.',
            ],
            [
                'id' => 2,
                'name' => 'Elegant Satin Dress',
                'category' => 'Evening Wear',
                'image' => 'https://placehold.co/600x750/E8D5D0/493D39?text=Satin+Dress',
                'description' => 'Gaun satin elegan untuk acara spesial.',
            ],
            [
                'id' => 3,
                'name' => 'Classic Blazer',
                'category' => 'Formal Wear',
                'image' => 'https://placehold.co/600x750/E8D5D0/493D39?text=Classic+Blazer',
                'description' => 'Blazer dengan potongan rapi dan ukuran yang dapat disesuaikan.',
            ],
            [
                'id' => 4,
                'name' => 'Black Evening Dress',
                'category' => 'Evening Wear',
                'image' => 'https://placehold.co/600x750/E8D5D0/493D39?text=Evening+Dress',
                'description' => 'Gaun malam dengan tampilan klasik dan elegan.',
            ],
        ];

        return view('customer.layanan.index', compact('services'));
    }


    public function show($id)
    {
        $services = [
            1 => [
                'id' => 1,
                'name' => 'Modern Kebaya',
                'category' => 'Traditional Wear',
                'image' => 'https://placehold.co/800x900/E8D5D0/493D39?text=Modern+Kebaya',
                'description' => 'Kebaya modern dengan desain elegan dan detail jahitan yang rapi. Cocok digunakan untuk acara formal, pesta, maupun acara spesial.',
                'measurements' => [
                    'Lingkar dada',
                    'Lingkar pinggang',
                    'Lingkar pinggul',
                    'Lebar bahu',
                    'Panjang badan',
                    'Panjang lengan',
                    'Lingkar lengan',
                ],
            ],
            2 => [
                'id' => 2,
                'name' => 'Elegant Satin Dress',
                'category' => 'Evening Wear',
                'image' => 'https://placehold.co/800x900/E8D5D0/493D39?text=Satin+Dress',
                'description' => 'Gaun satin elegan untuk acara spesial dengan tampilan anggun dan potongan yang menyesuaikan bentuk tubuh.',
                'measurements' => [
                    'Lingkar dada',
                    'Lingkar pinggang',
                    'Lingkar pinggul',
                    'Lebar bahu',
                    'Panjang badan',
                    'Panjang gaun',
                ],
            ],
            3 => [
                'id' => 3,
                'name' => 'Classic Blazer',
                'category' => 'Formal Wear',
                'image' => 'https://placehold.co/800x900/E8D5D0/493D39?text=Classic+Blazer',
                'description' => 'Blazer dengan potongan klasik dan tampilan profesional. Ukuran dapat disesuaikan agar nyaman digunakan.',
                'measurements' => [
                    'Lingkar dada',
                    'Lingkar pinggang',
                    'Lebar bahu',
                    'Panjang badan',
                    'Panjang lengan',
                    'Lingkar lengan',
                ],
            ],
            4 => [
                'id' => 4,
                'name' => 'Black Evening Dress',
                'category' => 'Evening Wear',
                'image' => 'https://placehold.co/800x900/E8D5D0/493D39?text=Evening+Dress',
                'description' => 'Gaun malam berwarna hitam dengan desain klasik dan elegan untuk berbagai acara istimewa.',
                'measurements' => [
                    'Lingkar dada',
                    'Lingkar pinggang',
                    'Lingkar pinggul',
                    'Lebar bahu',
                    'Panjang badan',
                    'Panjang gaun',
                ],
            ],
        ];

        if (!isset($services[$id])) {
            abort(404);
        }

        $service = $services[$id];

        return view('customer.layanan.detail', compact('service'));
    }
}
