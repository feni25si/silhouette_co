@extends('layouts.app')

@section('title', 'Katalog Produk - Silhouette & Co.')

@section('content')

<style>
    .catalog-header {
        background: #f5eeeb;
        padding: 65px 0;
        text-align: center;
    }

    .catalog-header h1 {
        color: #493d39;
        font-family: Georgia, serif;
        font-size: 42px;
    }

    .catalog-header p {
        color: #766761;
    }

    .product-card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        transition: 0.3s;
        background: #fff;
    }

    .product-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.10);
    }

    .product-image {
        width: 100%;
        height: 320px;
        object-fit: cover;
    }

    .product-card .card-body {
        padding: 20px;
    }

    .product-category {
        color: #a47d78;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .product-name {
        color: #493d39;
        font-family: Georgia, serif;
        font-size: 21px;
    }

    .btn-detail {
        background: #a47d78;
        color: white;
        border-radius: 5px;
        padding: 9px 20px;
    }

    .btn-detail:hover {
        background: #89635e;
        color: white;
    }

    .custom-section {
        background: #f5eeeb;
        border-radius: 12px;
        padding: 45px 25px;
        text-align: center;
    }

    .custom-section h2 {
        color: #493d39;
        font-family: Georgia, serif;
    }

    .btn-custom {
        background: #493d39;
        color: white;
        padding: 11px 28px;
    }

    .btn-custom:hover {
        background: #302723;
        color: white;
    }
</style>

<!-- Header Katalog -->
<section class="catalog-header">
    <div class="container">
        <h1>Our Collection</h1>
        <p class="mt-3">
            Discover our handcrafted pieces, made with care and attention to detail.
        </p>
    </div>
</section>

<!-- Daftar Produk -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 style="font-family: Georgia, serif; color: #493d39;">
                Explore Our Collection
            </h2>
            <p class="text-muted">
                Temukan inspirasi busana yang sesuai dengan gayamu.
            </p>
        </div>

        <div class="row g-4">

            @forelse ($services as $service)

                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">

                        <img
                            src="{{ $service['image'] }}"
                            class="product-image"
                            alt="{{ $service['name'] }}"
                        >

                        <div class="card-body d-flex flex-column">

                            <span class="product-category mb-2">
                                {{ $service['category'] }}
                            </span>

                            <h5 class="product-name">
                                {{ $service['name'] }}
                            </h5>

                            <p class="text-muted small">
                                {{ $service['description'] }}
                            </p>

                            <a
                                href="{{ route('layanan.detail', $service['id']) }}"
                                class="btn btn-detail mt-auto"
                            >
                                View Details
                            </a>

                        </div>
                    </div>
                </div>

            @empty

                <div class="col-12 text-center">
                    <p class="text-muted">
                        Belum ada produk yang tersedia.
                    </p>
                </div>

            @endforelse

        </div>
    </div>
</section>

<!-- Custom Your Outfit -->
<section class="pb-5">
    <div class="container">
        <div class="custom-section">
            <h2>Custom Your Outfit</h2>

            <p class="text-muted mt-3">
                Punya desain busana impian sendiri?
                Wujudkan bersama penjahit profesional kami.
            </p>

            <a href="{{ url('/custom') }}" class="btn btn-custom mt-3">
                Create Your Own Design
            </a>
        </div>
    </div>
</section>

@endsection
