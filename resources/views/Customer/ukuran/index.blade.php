
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

        {{-- Notifikasi sukses --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

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

            @forelse ($profiles as $profile)

                <div class="col-lg-4 col-md-6">

                    <div class="profile-card">

                        <h5>{{ $profile->profile_name }}</h5>

                        <p class="text-muted mb-2">
                            {{ $profile->owner }}
                        </p>

                        <small class="text-muted">
                            Terakhir diperbarui:
                            {{ $profile->updated_at->format('d M Y') }}
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

            @empty

                <div class="col-12">
                    <div class="text-center py-5">

                        <i class="bi bi-rulers fs-1 text-muted"></i>

                        <h5 class="mt-3">
                            Belum Ada Profil Ukuran
                        </h5>

                        <p class="text-muted">
                            Silakan tambahkan profil ukuran tubuh pertamamu.
                        </p>

                        <a href="{{ route('customer.ukuran.create') }}"
                           class="btn btn-brand">
                            + Tambah Profil Ukuran
                        </a>

                    </div>
                </div>

            @endforelse

        </div>

    </div>
</section>

@endsection
