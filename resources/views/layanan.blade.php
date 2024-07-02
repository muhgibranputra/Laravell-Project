<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kucuci</title>
    <!-- <link rel="stylesheet" href="public/css/style.css"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="navbar-container">
        <div class="logo">
          <a href="#"><img src="img/kucuci-2.png" alt="Kucuci Logo" /></a>
        </div>
        <nav class="nav-list">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/">Temukan Alasan</a></li>
            <li><a href="/layanan-harga">Layanan&Harga</a></li>
            <li><a href="https://api.whatsapp.com/send/?phone=%2B6281370380014&text&type=phone_number&app_absent=0">Contacts</a></li>
            <!-- <li><a href="#">Contacts</a></li> -->
          </ul>
        </nav>
    </header>

    <main>
            
            
        </div>
        <aside>
          <div class="social-media">
            <ul>
            <li>
                <a href="#"><i class="fab fa-youtube"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
              </li>
            </ul>
          </div>
        </aside>
    </main>

    <div class="cara-kerja">
        <h1>How It Works</h1>
        <div class="cara-kerja-kucuci">
            <div class="cara satu">
                <img src="img/rekaman.png" alt="">
                <h2>PEREKAMAN PAKAIAN</h2>
                <p>
                    Semua pakaian Anda kami rekam di workshop guna mencegah pakaian Anda hilang, rusak atau tertukar.
                </p>
            </div>
            <div class="cara dua">
                <img src="img/logo-cuci-baju.png" alt="">
                <h2>CUCI PREMIUM</h2>
                <p>
                    Pakaian dicuci dengan sistem 1 nota 1 mesin menggunakan chemical premium dari deterjen, sour hingga softener.
                </p>
            </div>
            <div class="cara tiga">
                <img src="img/logo-lipatbaju.png" alt="">
                <h2>SETRIKA & LIPAT</h2>
                <p>
                    Pakaian kami setrika uap & lipat secara rapi. (Untuk Cuci Kering Lipat, setrika hanya bagian tertentu seperti kerah kemeja).
                </p>
            </div>
            <div class="cara empat">
                <img src="img/packing-rapi.png" alt="">
                <h2>SETRIKA & LIPAT</h2>
                <p>
                    Pakaian kami setrika uap & lipat secara rapi. (Untuk Cuci Kering Lipat, setrika hanya bagian tertentu seperti kerah kemeja).
                </p>
            </div>
        </div>
    </div>

    <div class="pricing">
        <h1>HARGA</h1>
        <div class="price">
            <div class="cuci kering-lipat">
                <h2>{{ $menu1->jenis }}</h2>
                <h2>harga</h2>
                <h4>RP {{ $menu1->harga }}/KG</h4>
                <h4>Per Transaksi</h4>
                <h4>Gratis Antar Jemput</h4>
                <h4>Minimum 1 Kg</h4>
            </div>
            <div class="cuci kering-setrika">
                <h2>{{ $menu2->jenis }}</h2>
                <h2>harga</h2>
                <h4>RP {{ $menu2->harga }}/KG</h4>
                <h4>Per Transaksi</h4>
                <h4>Gratis Antar Jemput</h4>
                <h4>Minimum 1 Kg</h4>
            </div>
            <div class="cuci langganan">
                <h2>{{ $menu3->jenis }}</h2>
                <h2>harga</h2>
                <h4>RP {{ $menu3->harga }}/KG</h4>
                <h4>Per Transaksi</h4>
                <h4>Gratis Antar Jemput dan cuma 1 hari</h4>
                <h4>Minimum 1 Kg</h4>
            </div>
            <div class="cuci sepatu">
                <h2>{{ $menu4->jenis }}</h2>
                <h2>harga</h2>
                <h4>RP {{ $menu4->harga }}</h4>
                <h4>Per Transaksi</h4>
                <h4>Gratis Antar Jemput</h4>
            </div>
            <div class="cuci seprai-selimut">
                <h2>{{ $menu5->jenis }}</h2>
                <h2>harga</h2>
                <h4>RP {{ $menu5->harga }}</h4>
                <h4>Per Transaksi</h4>
                <h4>Gratis Antar Jemput</h4>
            </div>
        </div>
    </div>

    <footer>
        <p>Copyright &#169; 2023 - Laundry Kucuci Indonesia.</p>
    </footer>
</body>
</html>