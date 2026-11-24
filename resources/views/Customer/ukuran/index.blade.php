
@extends('layouts.app')

@section('title', 'Data Ukuran Pelanggan | Silhouette & Co.')

@section('content')

<style>
    .measurement-header {
        background: #f5eeeb;
        padding: 55px 0;
    }

    .measurement-header h1 {
        font-family: 'Playfair Display', serif;
        color: #39332f;
    }

    .profile-card {
        border: 1px solid #eee3df;
        border-radius: 12px;
        padding: 25px;
        background: white;
        height: 100%;
        transition: 0.3s;
    }

    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.07);
    }

    .profile-icon {
        width: 55px;
        height: 55px;
        background: #f5eeeb;
        color: #9b7770;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 23px;
    }

    .btn-measurement {
        background: #d9b9b3;
        color: #39332f;
        border: none;
    }

    .btn-measurement:hover {
        background: #9b877d;
        color: white;
    }

    .guide-box {
        background: #faf7f2;
        border-radius: 12px;
        padding: 30px;
    }
</style>

<!-- Header -->
<section class="measurement-header">
    <div class="container">
        <h1>My Body Measurements</h1>

        <p class="text-muted mt-2 mb-0">
            Kelola data ukuran tubuh untuk mendapatkan
            hasil jahitan yang sesuai dan nyaman.
        </p>
    </div>
</section>

<!-- Daftar Profil -->
<section class="py-5">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 style="font-family: 'Playfair Display', serif;">
                    My Measurement Profiles
                </h3>

                <p class="text-muted">
                    Simpan ukuran tubuh beberapa orang dalam satu akun.
                </p>
            </div>                                    

            <a href="{{ route('customer.ukuran.create') }}" class="btn btn-brand">
                + Add New Profile
            </a>
        </div>

        <div class="row g-4">

            @foreach ($profiles as $profile)

                <div class="col-lg-4 col-md-6">

                    <div class="profile-card">

                        <div class="profile-icon mb-3">
                            <i class="bi bi-person"></i>
                        </div>

                        <h5>{{ $profile['name'] }}</h5>

                        <p class="text-muted mb-2">
                            {{ $profile['owner'] }}
                        </p>

                        <small class="text-muted">
                            Terakhir diperbarui:
                            {{ $profile['updated_at'] }}
                        </small>

                        <hr>

                        <div class="d-flex gap-2">

                            <a href="#"
                               class="btn btn-measurement btn-sm flex-fill">
                                View Details
                            </a>

                            <a href="#"
                               class="btn btn-outline-secondary btn-sm flex-fill">
                                Edit
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
</section>

<!-- Panduan Pengukuran -->
<section class="pb-5">
    <div class="container">

        <div class="guide-box">

            <h3 style="font-family: 'Playfair Display', serif;">
                Measurement Guide
            </h3>

            <p class="text-muted mt-2">
                Belum tahu cara mengukur tubuh dengan benar?
                Pelajari panduan pengukuran sebelum mengisi data.
            </p>

            <a href="#"
               class="btn btn-measurement mt-3 px-4">
                Learn How to Measure
            </a>

        </div>

    </div>
</section>

@endsection
