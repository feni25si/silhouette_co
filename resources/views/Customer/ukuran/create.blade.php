
@extends('layouts.app')

@section('title', 'Tambah Profil Ukuran | Silhouette & Co.')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="mb-4">
            <a href="{{ route('customer.ukuran.index') }}"
                class="text-decoration-none"
                style="color: #9b877d;">
                &larr; Kembali ke Ukuran Saya
            </a>
        </div>

        <div class="text-center mb-5">
            <p class="text-uppercase small mb-2">Body Measurement</p>
            <h1 style="font-family: 'Playfair Display', serif;">
                Add New Profile
            </h1>
            <p class="text-muted">
                Buat profil ukuran badan untuk kamu atau anggota keluarga.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card border-0 shadow-sm p-4 p-md-5">
                    <form>

                        <h5 class="mb-4">Informasi Profil</h5>

                        <div class="mb-4">
                            <label class="form-label">Nama Profil</label>
                            <input type="text" class="form-control"
                                placeholder="Contoh: Ukuran Saya">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Pemilik Ukuran</label>
                            <select class="form-select">
                                <option value="">Pilih pemilik ukuran</option>
                                <option>Diri Sendiri</option>
                                <option>Ibu</option>
                                <option>Ayah</option>
                                <option>Adik</option>
                                <option>Kakak</option>
                                <option>Lainnya</option>
                            </select>
                        </div>

                        
                        <hr class="my-4">

                        <h5 class="mb-2">Ukuran Badan</h5>
                        <p class="text-muted mb-4">
                            Lengkapi ukuran badan dalam satuan sentimeter (cm).
                            Isi ukuran sesuai kebutuhan pakaian yang akan dibuat.
                        </p>

                        <div class="row">
                            
                            <div class="col-md-6 mb-4">
                                <div class="card border-0 shadow-sm rounded-4 h-100">
                                    <div class="card-body p-3">

                                        <!-- Judul -->
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <span class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                                style="width: 34px; height: 34px; background: #d9a29b; color: white; font-size: 13px;">
                                                01
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lingkar Dada
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Ilustrasi Pengukuran Lingkar Dada Pastel.png') }}"
                                                alt="Ilustrasi pengukuran lingkar dada"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->
                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Lingkarkan pita ukur pada bagian dada yang paling penuh.
                                            Pastikan pita lurus mengelilingi tubuh dan tidak terlalu ketat.
                                        </p>

                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number"
                                            step="0.1"
                                            class="form-control form-control-sm"
                                            placeholder="Contoh: 90">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card border-0 shadow-sm rounded-4 h-100">
                                    <div class="card-body p-3">

                                        <!-- Judul -->
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <span class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                                style="width: 34px; height: 34px; background: #d9a29b; color: white; font-size: 13px;">
                                                02
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lingkar Pinggang
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Panduan Mengukur Lingkar Pinggang.png') }}"
                                                alt="Cara mengukur lingkar pinggang"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Lingkarkan pita ukur pada bagian pinggang paling ramping.
                                            Pastikan pita lurus mengelilingi pinggang dan tidak terlalu ketat.
                                        </p>

                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number"
                                            step="0.1"
                                            class="form-control form-control-sm"
                                            placeholder="Contoh: 80">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card border-0 shadow-sm rounded-4 h-100">
                                    <div class="card-body p-3">

                                        <!-- Judul -->
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <span class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                                style="width: 34px; height: 34px; background: #d9a29b; color: white; font-size: 13px;">
                                                03
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lingkar Pinggul
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Mengukur Lingkar Pinggul dengan Pita Kuning.png') }}"
                                                alt="Cara mengukur lingkar pinggul"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Lingkarkan pita ukur pada bagian pinggul dan bokong yang paling lebar. 
                                            Pastikan pita ukur melingkar lurus dan tidak terlalu ketat.
                                        </p>

                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number"
                                            step="0.1"
                                            class="form-control form-control-sm"
                                            placeholder="Contoh: 100">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card border-0 shadow-sm rounded-4 h-100">
                                    <div class="card-body p-3">

                                        <!-- Judul -->
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <span class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                                style="width: 34px; height: 34px; background: #d9a29b; color: white; font-size: 13px;">
                                                04
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Tinggi Pinggul
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Ilustrasi Mengukur Tinggi Pinggul.png') }}"
                                                alt="Cara mengukur tinggi pinggul"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Ukur jarak dari garis pinggang hingga bagian pinggul yang paling lebar.
                                        </p>

                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number"
                                            step="0.1"
                                            class="form-control form-control-sm"
                                            placeholder="Contoh: 10">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card border-0 shadow-sm rounded-4 h-100">
                                    <div class="card-body p-3">

                                        <!-- Judul -->
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <span class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                                style="width: 34px; height: 34px; background: #d9a29b; color: white; font-size: 13px;">
                                                05
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lebar Bahu
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Ilustrasi Mengukur Lebar Bahu.png') }}"
                                                alt="Cara mengukur lebar bahu"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Ukur dari belakang tubuh dalam keadaan tegap dan tegak, 
                                            kemudian tarik pita dari ujung bahu kiri melewati tengkuk leher ke kanan.


                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number"
                                            step="0.1"
                                            class="form-control form-control-sm"
                                            placeholder="Contoh: 10">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Lebar Bahu (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 38">
                                <small class="text-muted">Ukur dari ujung bahu kiri ke ujung bahu kanan.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Panjang Badan (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 60">
                                <small class="text-muted">Ukur dari titik bahu dekat leher hingga panjang badan yang diinginkan.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Panjang Muka (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 40">
                                <small class="text-muted">Ukur dari lekuk leher depan sampai garis pinggang.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Panjang Punggung (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 38">
                                <small class="text-muted">Ukur dari tulang tengkuk belakang sampai garis pinggang.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Panjang Dress (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 120">
                                <small class="text-muted">Ukur dari titik bahu tertinggi sampai batas panjang dress.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Panjang Rok (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 90">
                                <small class="text-muted">Ukur dari garis pinggang sampai batas panjang rok.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Panjang Celana (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 100">
                                <small class="text-muted">Ukur dari pinggang bagian samping hingga batas panjang celana.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Panjang Dalam / Pesak Bawah (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 72">
                                <small class="text-muted">Ukur dari pertemuan jahitan selangkangan hingga ujung kaki bagian dalam.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Lingkar Pesak (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 65">
                                <small class="text-muted">Ukur dari pinggang depan melewati selangkangan hingga pinggang belakang.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card border-0 shadow-sm rounded-4 h-100">
                                    <div class="card-body p-3">

                                        <!-- Judul -->
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <span class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                                style="width: 34px; height: 34px; background: #d9a29b; color: white; font-size: 13px;">
                                                14
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lingkar Paha
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Panduan Mengukur Lingkar Paha.png') }}"
                                                alt="Cara mengukur lingkar paha"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Lingkarkan pita ukur pada bagian paha yang paling lebar. 
                                            Pastikan pita ukur melingkar lurus dan tidak terlalu ketat.                                        </p>

                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number"
                                            step="0.1"
                                            class="form-control form-control-sm"
                                            placeholder="Contoh: 30">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Lingkar Bawah Celana (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 40">
                                <small class="text-muted">Ukur melingkari bukaan bawah kaki celana.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Lingkar Kerung Lengan (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 42">
                                <small class="text-muted">Ukur melingkari pangkal ketiak hingga ujung bahu.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Panjang Lengan (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 55">
                                <small class="text-muted">Ukur dari ujung bahu sampai batas panjang lengan.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Lingkar Lengan Atas (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 30">
                                <small class="text-muted">Ukur melingkari bagian lengan atas paling besar.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Lingkar Pergelangan Tangan (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 16">
                                <small class="text-muted">Ukur melingkari bagian pergelangan tangan.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Lingkar Leher (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 16">
                                <small class="text-muted">Ukur melingkari bagian pangkal leher.</small>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Tinggi Puncak Dada (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 16">
                                <small class="text-muted">Ukur dengan menarik pita meteran secara lurus vertikal dari titik puncak payudara ke bawah hingga menyentuh tali patokan di pinggang.</small>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Jarak Puncak Dada (cm)</label>
                                <input type="number" step="0.1" class="form-control" placeholder="Contoh: 16">
                                <small class="text-muted">Ujung meteran tepat di titik puncak payudara sebelah kiri, lalu tarik mendatar secara lurus menuju titik puncak payudara sebelah kanan.</small>
                            </div>

                        </div>

                        <hr class="my-4">

                        <div class="mb-4">
                            <label class="form-label">Jenis Ukuran</label>
                            <select class="form-select">
                                <option value="">Pilih jenis ukuran</option>
                                <option>Ukuran Pas Badan</option>
                                <option>Ukuran Jadi Pakaian</option>
                            </select>
                            <small class="text-muted">
                                Ukuran pas badan adalah ukuran tubuh asli.
                                Penjahit akan menambahkan kelonggaran saat membuat pola.
                            </small>
                        </div>

                        <a href="{{ route('customer.ukuran.index') }}"
                            class="btn btn-outline-secondary d-inline-flex align-items-center justify-content-center"
                            style="min-width: 90px; padding: 11px 24px;">
                            Batal
                        </a>

                        <button type="button" class="btn btn-brand">
                            Simpan Profil
                        </button>


                    </form>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection
