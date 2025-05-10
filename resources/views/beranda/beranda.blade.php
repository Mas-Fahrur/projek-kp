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
    <div class="logo">TokoKeren</div>
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
    <div class="hero-text">
      <h1>Selamat Datang di TokoKeren</h1>
      <p>Temukan produk terbaik untuk kebutuhanmu</p>
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
          <img src="images/man_style.png" alt="Produk 1" />
          <h3>Produk A</h3>
        </div>
        <div class="swiper-slide produk-card">
          <img src="images/produk2.jpg" alt="Produk 2" />
          <h3>Produk B</h3>
        </div>
        <div class="swiper-slide produk-card">
          <img src="images/produk3.jpg" alt="Produk 3" />
          <h3>Produk C</h3>
        </div>
        <div class="swiper-slide produk-card">
          <img src="images/produk4.jpg" alt="Produk 4" />
          <h3>Produk D</h3>
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
    <p>TokoKeren adalah toko online terpercaya yang menyediakan berbagai produk berkualitas dengan harga bersahabat. Kepuasan Anda adalah prioritas kami.</p>
  </section>

  <!-- Kontak Section -->
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
