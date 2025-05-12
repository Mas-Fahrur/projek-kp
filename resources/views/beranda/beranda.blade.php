<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TokoKeren</title>
  <link rel="stylesheet" href="css/style.css" />
  <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">
      <img src="images/logo/logo.png" alt="Logo" class="logo-img" />
      <span>ISKANDARTEX</span>
    </div>
    
    <ul class="nav-menu">
      <li><a href="#beranda">Beranda</a></li>
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
      <li><a href="#tentang">Tentang</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>
  </div>

  <!-- Hero Section -->
  <section class="hero" id="beranda">
    <div class="gambar">
    </div>
    <div class="hero-text">
      <h1>Selamat Datang di Iskandartex</h1>
      <p>Jelajahi koleksi eksklusif dari PT. Iskandartex<br>
      di mana warisan batik berpadu dengan desain modern yang memikat.</p>
      <a href="#produk" class="btn">Lihat Produk</a>
    </div>
  </section>
  

  <!-- Produk Section -->
  <section class="produk" id="produk">
    <h2>Produk Unggulan</h2>
  
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide produk-card">
          <img src="images/bahan/1.jpeg" alt="Produk 1" />
          <h3>Produk</h3>
        </div>
        <div class="swiper-slide produk-card">
          <img src="images/man/hem-pndk-1/1.jpeg" alt="Produk 2" />
          <h3>Man</h3>
        </div>
        <div class="swiper-slide produk-card">
          <img src="images/women/blouse/2.jpg" alt="Produk 3" />
          <h3>Women</h3>
        </div>
        <div class="swiper-slide produk-card">
          <img src="images/couple/couple3/4-2.png" alt="Produk 4" />
          <h3>Couple</h3>
        </div>
      </div>
      <!-- Navigasi -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>
  

  <!-- Tentang Section -->
  <section class="tentang" id="tentang">
    <h2>Tentang Kami</h2>
    <p>PT. Iskandar Indah Printing Textile (Iskandartex) berakar dari kecintaan keluarga terhadap dunia tekstil
      yang tumbuh sejak membantu di toko kain keluarga besar di Surabaya. Berbekal pengalaman tersebut, 
      keluarga kami merantau ke Solo, kota yang terkenal dengan budaya batiknya, dan mulai merintis usaha produksi batik 
      di kawasan Laweyan sejak tahun 1969, meski dengan keterbatasan listrik dan tenaga kerja.</p>
      <br>
      <p>Pada 23 Mei 1975, usaha ini resmi berdiri sebagai CV. Iskandartex di Jl. Pakel No. 9–11, Kerten, Surakarta, 
      dan memulai produksi setahun kemudian. Dengan hanya 25 mesin tenun dan sekitar 200 karyawan, kami terus berkembang. 
      Seiring peningkatan kapasitas dan jangkauan pemasaran ke berbagai kota besar di Indonesia, 
      perusahaan berubah menjadi PT. Iskandar Indah Printing Textile pada 2 Januari 1991.</p>
        <br class="text">
      <p>Hari ini, Iskandartex dikenal sebagai produsen tekstil yang menggabungkan warisan budaya dengan teknologi modern, 
      terus berinovasi untuk memenuhi kebutuhan pasar lokal dan nasional dengan produk berkualitas.</p>
  </section>

  <!-- Kontak Section -->

  <section class="maps">
    <div class="maps-text">
      <h2>Outlet Iskandartex</h2>
      <p>Jl. Pakel No.11, Kerten, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57171</p><br>
      <p>Instagram : fo_iskandartex</p><br>
      <p>Telp : 0271716165</p>
    </div>
    <div class="maps-gmaps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3708.8202411448574!2d110.79295610143241!3d-7.550818555736746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a143d3307a769%3A0xdad24a22229749fd!2sBatik%20Iskandartex%20solo!5e0!3m2!1sid!2sid!4v1747052605934!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  <section class="kontak" id="kontak">
    <h2>Kontak Kami</h2>
    <p>Hubungi kami lewat WhatsApp: <a href="https://wa.me/6281234567890">0812-3456-7890</a></p>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 TokoKeren. Semua hak dilindungi.</p>
  </footer>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
</script>

</body>
</html>
