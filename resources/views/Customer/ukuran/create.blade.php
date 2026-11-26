
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
                    <form action="{{ route('customer.ukuran.store') }}" method="POST">
                        @csrf
                        <h5 class="mb-4">Informasi Profil</h5>

                        <div class="mb-4">
                            <label class="form-label">Nama Profil</label>
                            <input type="text" name="profile_name" class="form-control"
                                placeholder="Contoh: Ukuran Saya">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Pemilik Ukuran</label>
                            <select name="owner" class="form-select" required>
                                    <option value="">Pilih pemilik ukuran</option>
                                    <option value="Diri Sendiri">Diri Sendiri</option>
                                    <option value="Ibu">Ibu</option>
                                    <option value="Ayah">Ayah</option>
                                    <option value="Adik">Adik</option>
                                    <option value="Kakak">Kakak</option>
                                    <option value="Lainnya">Lainnya</option>
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

                                        <input type="number" name="lingkar_dada" class="form-control" step="0.1"
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

                                        <input type="number" name="lingkar_pinggang" class="form-control" step="0.1"
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

                                        <input type="number" name="lingkar_pinggul" class="form-control" step="0.1"
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

                                        <input type="number" name="tinggi_pinggul" class="form-control" step="0.1"
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

                                        <input type="number" name="lebar_bahu" class="form-control" step="0.1"
                                            placeholder="Contoh: 50">

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
                                                06
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Panjang Badan
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Panduan Mengukur Panjang Tubuh Berdiri.png') }}"
                                                alt="Cara mengukur panjang badan"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Ukur dari titik bahu dekat leher hingga batas pinggang
                                            atau panjang badan yang diinginkan.
                                        </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="panjang_badan" class="form-control" step="0.1"
                                            placeholder="Contoh: 120">

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
                                                07
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Panjang Muka
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Depan Tubuh.png') }}"
                                                alt="Cara mengukur panjang muka"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Ukur dari lekuk leher ditengah muka lurus ke bawah hingga batas pinggang.
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="panjang_muka" class="form-control" step="0.1"
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
                                                08
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Panjang Punggung
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Panjang Punggung.png') }}"
                                                alt="Cara mengukur panjang punggung"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Ukur dari pangkal leher belakang (tengkuk) lurus ke bawah hingga batas pinggang belakang.
                                        </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="panjang_punggung" class="form-control" step="0.1"
                                            placeholder="Contoh: 60">

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
                                                09
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Panjang Dress
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Panduan Mengukur Panjang Gaun.png') }}"
                                                alt="Cara mengukur panjang dress"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Ukur dari titik bahu dekat leher hingga panjang dress 
                                            yang diinginkan, misalnya selutut atau semata kaki.                                        </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="panjang_dress" class="form-control" step="0.1"
                                            placeholder="Contoh: 120">

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
                                                10
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lingkar Pisak
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/L. Pisak.png') }}"
                                                alt="Cara mengukur lingkar pisak"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->
                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Ukur dari tengah bagian atas buckle ban pinggang atau kancing bagian depan 
                                            ke arah bawah melewati selangkangan, lalu ke atas hingga akhir ban pinggang bagian belakang.
                                        </p>

                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="lingkar_pisak" class="form-control" step="0.1"
                                            placeholder="Contoh: 30">
                                    
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
                                                11
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lingkar Ujung Bawah Celana
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Lingkar ujg cln.png') }}"
                                                alt="Cara mengukur lingkar ujung bawah celana"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Ukur secara melingkar pada bagian ujung bawah kaki celana.                                       </p>

                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="lingkar_bawah_celana" class="form-control" step="0.1"
                                            placeholder="Contoh: 20">

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
                                                12
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

                                        <input type="number" name="lingkar_paha" class="form-control" step="0.1"
                                            placeholder="Contoh: 60">

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
                                                13
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Panjang Bawahan
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Panjang Rok dan Celana.png') }}"
                                                alt="Cara mengukur panjang bawahan"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Ukur dari garis pinggang hingga ujung rok atau celana sesuai panjang 
                                            yang diinginkan. Pastikan meteran mengikuti panjang pakaian yang akan dibuat.                                       </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="panjang_bawahan" class="form-control" step="0.1"
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
                                                14
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lingkar Ketiak
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Lingkar Ketiak.png') }}"
                                                alt="Cara mengukur lingkar ketiak"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Lingkarkan pita meteran mengelilingi pangkal lengan melewati puncak bahu 
                                            hingga bawah ketiak secara pas, jangan terlalu ketat,agar nyaman saat bergerak.                                     </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="lingkar_ketiak" class="form-control" step="0.1"
                                            placeholder="Contoh: 14">

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
                                                15
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Panjang Lengan
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/Pjg Lgn.png') }}"
                                                alt="Cara mengukur panjang lengan"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Ukur dari puncak lengan terus kebawah lengan melalui 
                                            tulang pergelangan lengan yang yang menonjol.
                                        </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="panjang_lengan" class="form-control" step="0.1"
                                            placeholder="Contoh: 50">

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
                                                16
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lingkar Lengan Atas
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/L. atas.png') }}"
                                                alt="Cara mengukur lingkar lengan atas"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Lingkarkan pita meteran pada bagian lengan atas terbesar secara pas 
                                            dan tidak menekan kulit, lalu beri sedikit kelonggaran agar nyaman digunakan.
                                        </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="lingkar_lengan_atas" class="form-control" step="0.1"
                                            placeholder="Contoh: 20">

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
                                                17
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lingkar Pergelangan Tangan
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/L. prglngn tgn.png') }}"
                                                alt="Cara mengukur lingkar pergelangan tangan"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Lingkarkan pita ukur pada pergelangan tangan di bagian paling kecil. 
                                            Pastikan pita tidak terlalu ketat agar ukuran tetap nyaman.
                                        </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="lingkar_pergelangan_tangan" class="form-control" step="0.1"
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
                                                18
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Lingkar Leher
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/L. lhr.png') }}"
                                                alt="Cara mengukur lingkar leher"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Lingkarkan pita meteran mengelilingi pangkal leher bagian bawah secara pas tanpa menekan kulit,
                                            lalu beri sedikit kelonggaran (sekitar 1 jari) agar kerah nyaman saat dipakai.
                                        </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="lingkar_leher" class="form-control" step="0.1"
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
                                                19
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Tinggi Puncak Dada (Wanita)
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/ukuran tinggi puncak payudara.jpg') }}"
                                                alt="Cara mengukur tinggi puncak dada"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Diukur mulai dari titik bahu bagian atas dekat pangkal leher, 
                                            lalu ditarik lurus ke bawah hingga tepat pada bagian puncak dada.
                                        </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="tinggi_puncak_dada" class="form-control" step="0.1"
                                            placeholder="Contoh: 25">

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
                                                20
                                            </span>

                                            <h5 class="mb-0"
                                                style="font-family: 'Playfair Display', serif;">
                                                Jarak Puncak Dada (Wanita)
                                            </h5>

                                            <span class="badge rounded-pill ms-auto"
                                                style="background: #f8e8e4; color: #76574f;">
                                                cm
                                            </span>
                                        </div>

                                        <hr class="my-3">

                                        <!-- Gambar -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('img/ukuran/J.PD.png') }}"
                                                alt="Cara mengukur jarak puncak dada"
                                                class="img-fluid rounded-3"
                                                style="width: 100%; max-width: 230px; height: 170px; object-fit: contain;">
                                        </div>

                                        <!-- Caption -->

                                        <p class="text-muted text-center mb-3"
                                            style="font-size: 12px; line-height: 1.6;">
                                            Diukur secara mendatar dari titik puncak dada sebelah 
                                            kanan ke titik puncak dada sebelah kiri dalam keadaan pas.
                                        </p>
                                        <hr class="my-3">

                                        <!-- Input -->
                                        <label class="form-label fw-semibold"
                                            style="font-size: 13px;">
                                            Hasil Pengukuran (cm)
                                        </label>

                                        <input type="number" name="jarak_puncak_dada" class="form-control" step="0.1"
                                            placeholder="Contoh: 10">

                                    </div>
                                </div>
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

                        <button type="submit" class="btn btn-brand">
                            Simpan Profil
                        </button>


                    </form>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection
