<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucfirst($products) }} - TokoKeren</title>
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
        <h2>Produk Kategori: </h2>
        <div class="produk-container">
            @foreach ($products as $product)
                <div class="produk-card">
                    @if ($product->image_url)
                        <img src="{{ $product->image_url }}" alt="Gambar Produk" width="100">
                    @else
                        Tidak ada gambar
                    @endif
                    <h3>{{ $product->name }}</h3>
                    <h4>{{ $product->stock }}</h4>
                    <p>{{ $product->category }}</p>
                    <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>

                </div>
            @endforeach
        </div>
    </section>
</body>

</html>