<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucfirst($kategori) }} - TokoKeren</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="navbar">
        <div class="logo">TokoKeren</div>
        <ul class="nav-menu">
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ route('produk.kategori', 'man') }}">Man</a></li>
            <li><a href="{{ route('produk.kategori', 'women') }}">Women</a></li>
            <li><a href="{{ route('produk.kategori', 'couple') }}">Couple</a></li>
            <li><a href="{{ route('produk.kategori', 'sarung') }}">Sarung</a></li>
            <li><a href="{{ route('produk.kategori', 'bahan') }}">Bahan</a></li>
        </ul>
    </div>

    <section class="produk">
        <h2>Produk Kategori: {{ ucfirst($kategori) }}</h2>
        <div class="produk-container">
            @foreach ($items as $item)
                <div class="produk-card">
                    <img src="{{ asset('images/default-product.jpg') }}" alt="{{ $item }}">
                    <h3>{{ $item }}</h3>
                </div>
            @endforeach
        </div>
    </section>
</body>
</html>
