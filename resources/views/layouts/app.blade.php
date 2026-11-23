
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Silhouette & Co.')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --cream: #faf7f2;
            --pink: #d9b9b3;
            --taupe: #9b877d;
            --dark: #39332f;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--cream);
            color: var(--dark);
        }

        .brand-name {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 600;
            color: var(--dark);
        }

        .navbar {
            background: var(--cream);
        }

        .navbar .nav-link {
            color: var(--dark);
            margin: 0 8px;
        }

        .navbar .nav-link:hover {
            color: var(--taupe);
        }

        .btn-brand {
            background: var(--pink);
            color: var(--dark);
            border: none;
            padding: 11px 24px;
        }

        .btn-brand:hover {
            background: var(--taupe);
            color: white;
        }

        footer {
            background: var(--dark);
            color: white;
            padding: 30px 0;
        }
    </style>

    @stack('styles')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top border-bottom">
        <div class="container py-2">

            <a class="navbar-brand brand-name" href="/">
                Silhouette & Co.
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Layanan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <a href="#" class="btn btn-brand">
                            Pesan Sekarang
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <h4 class="brand-name text-white">
                Silhouette & Co.
            </h4>

            <p class="mb-0">
                Crafted with care, made for you.
            </p>

            <small>
                &copy; {{ date('Y') }} Silhouette & Co. All rights reserved.
            </small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
