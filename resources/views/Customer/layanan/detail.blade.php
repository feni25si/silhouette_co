
@extends('layouts.app')

@section('title', $service['name'] . ' - Silhouette & Co.')

@section('content')

<style>
    .detail-section {
        background: #f5eeeb;
        padding: 40px 0;
    }

    .detail-image {
        width: 100%;
        height: 550px;
        object-fit: cover;
        border-radius: 12px;
    }

    .detail-category {
        color: #a47d78;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 13px;
    }

    .detail-title {
        font-family: Georgia, serif;
        color: #493d39;
        font-size: 40px;
    }

    .detail-description {
        color: #766761;
        line-height: 1.8;
    }

    .measurement-box {
        background: #f5eeeb;
        border-radius: 10px;
        padding: 30px;
    }

    .measurement-box li {
        margin-bottom: 12px;
        color: #594b46;
    }

    .btn-order {
        background: #a47d78;
        color: white;
        padding: 12px 28px;
        border-radius: 5px;
    }

    .btn-order:hover {
        background: #89635e;
        color: white;
    }
</style>

<!-- Detail Produk -->
<section class="detail-section">
    <div class="container">

        <a href="{{ route('layanan.index') }}"
           class="text-decoration-none"
           style="color: #89635e;">
            ← Kembali ke Katalog
        </a>

        <div class="row align-items-center g-5 mt-3">

            <div class="col-lg-6">
                <img
                    src="{{ $service['image'] }}"
                    alt="{{ $service['name'] }}"
                    class="detail-image"
                >
            </div>

            <div class="col-lg-6">

                <span class="detail-category">
                    {{ $service['category'] }}
                </span>

                <h1 class="detail-title mt-3">
                    {{ $service['name'] }}
                </h1>

                <p class="detail-description mt-4">
                    {{ $service['description'] }}
                </p>

                <hr>

                <h5>Product Information</h5>

                <p class="detail-description">
                    Produk dibuat dengan memperhatikan detail
                    jahitan dan ukuran tubuh pelanggan agar
                    nyaman digunakan.
                </p>

                <a href="{{ url('/custom') }}"
                   class="btn btn-order mt-3">
                    Pesan Produk Ini
                </a>

            </div>
        </div>
    </div>
</section>

<!-- Ukuran Tubuh -->
<section class="py-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 mx-auto">

                <div class="measurement-box">

                    <h3 style="font-family: Georgia, serif;">
                        Required Body Measurements
                    </h3>

                    <p class="text-muted mt-3">
                        Ukuran tubuh yang diperlukan untuk
                        membuat produk ini:
                    </p>

                    <ul class="mt-4">
                        @foreach ($service['measurements'] as $measurement)
                            <li>{{ $measurement }}</li>
                        @endforeach
                    </ul>

                    <small class="text-muted">
                        Pastikan ukuran yang diberikan sesuai
                        agar pakaian nyaman digunakan.
                    </small>

                </div>

            </div>
        </div>

    </div>
</section>

@endsection
