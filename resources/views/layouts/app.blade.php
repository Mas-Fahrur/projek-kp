<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Toko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="navbar">
    <div class="logo">
      <img src="images/logo/logo.png" alt="Logo" class="logo-img" />
      <span>ISKANDARTEX</span>
    </div>
    
    <ul class="nav-menu">
      <li><a href={{ route('beranda') }}>Beranda</a></li>
      <li class="dropdown">
        <a href="#produk">Produk</a>
        <ul class="dropdown-content">
            <li><a href="{{ route('produk.kategori', 'man') }}">man</a></li>
            <li><a href="{{ route('produk.kategori', 'women') }}">women</a></li>
            <li><a href="{{ route('produk.kategori', 'couple') }}">couple</a></li>
            <li><a href="{{ route('produk.kategori', 'sarung') }}">sarung</a></li>
            <li><a href="{{ route('produk.kategori', 'bahan') }}">bahan</a></li>
            
        </ul>
    </li>
      <li><a href={{ route('keranjang') }}>Keranjang</a></li>
      <li><a href={{ route('profil')}}>Profil</a></li>
    </ul>
  </div>

    <main class="py-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
