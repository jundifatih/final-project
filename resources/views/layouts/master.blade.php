<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bank Sampah</title>
    {{-- Link CSS Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    {{-- Link CDN Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        *{
            margin: 0;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color:#0A6847;">
        <div class="container">
          <a class="navbar-brand fw-bold fs-3">Bank Sampah</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mx-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('get_beranda')}}">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('get_beranda')}}#jenis_sampah">Jenis Sampah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('get_test')}}">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('get_beranda')}}#hubungi-kami">Hubungi</a>
              </li>
            </ul>
            <div class="d-flex gap-3 my-3">
              <a href="{{route('get_login')}}">
                <button class="btn btn-light fw-bold text-success">Masuk</button>
              </a>
              <a href="{{route('get_register')}}">
                <button class="btn btn-light fw-bold text-success">Daftar</button>
              </a>
            </div>
          </div>
        </div>
    </nav>
    {{-- End Navbar --}}
    
    <main class="my-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="p-2" style="background-color: #0A6847">
        <p class="text-light text-center my-1">Bank Sampah Copyright 2024</p>
        <p class="text-light text-center">Jl. bala bala gehu no 4 RT01/01 Desa. Tahu, Kecamatan Kurupuk, Kab. Tahu Gejrot</p>
    </footer>
    {{-- End Footer --}}
    {{-- Link JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>