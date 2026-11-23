
@extends('layouts.app')

@section('title', 'Profil Saya | Silhouette & Co.')

@section('content')

<div class="container py-5">

    <h2>Profil Saya</h2>

    <p>Kelola informasi akun pelanggan Silhouette & Co.</p>

    <div class="card p-4 mt-4">
        <h5>Informasi Pelanggan</h5>

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control"
                placeholder="Masukkan nama lengkap">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control"
                placeholder="Masukkan email">
        </div>

        <div class="mb-3">
            <label class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control"
                placeholder="Masukkan nomor telepon">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" rows="3"
                placeholder="Masukkan alamat"></textarea>
        </div>

        <button type="button" class="btn btn-secondary">
            Simpan Profil
        </button>
    </div>

</div>

@endsection
