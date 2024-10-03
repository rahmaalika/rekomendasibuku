<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Tampilan Buku</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ruang Baca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/buku">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/rekomendasi">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/pengaturan">Pengaturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/favorite">Favorite</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="book">
            <h1 class="title">Buku</h1>
            <img src="img/7aeb76f2-5669-46ec-9882-90552bef85ff_169.jpg" style="width: 100%;" alt="">
            <h2 class="author">Daftar Isi</h2>
            <p class="description">
                Ini adalah deskripsi buku. Buku ini membahas berbagai tema menarik dan memberikan wawasan yang mendalam.
            </p>
            <div class="content">
                <h3>Isi Buku</h3>
                <p class="description">
                    1. Zaman Pra-Sejarah
                    Gua dan Ukiran: Sebelum penemuan tulisan, manusia menggunakan simbol dan gambar di dinding gua untuk mendokumentasikan informasi.
                    2. Tulisan Awal
                    Lempung dan Papyrus: Di Mesopotamia, sekitar 3500 SM, tulisan pertama kali dibuat di atas lempung. Sementara di Mesir, papyrus digunakan sebagai media tulisan.
                    Perkembangan Aksara: Aksara kuno seperti hieroglif Mesir dan cuneiform Sumeria mulai digunakan untuk mencatat informasi.
                    3. Manuskrip Kuno
                    Perpustakaan Pertama: Di kota-kota seperti Niniveh dan Alexandria, perpustakaan pertama didirikan untuk menyimpan manuskrip.
                    Kodeks: Kodeks (buku yang dibuat dari lembaran papyrus atau perkamen yang dilipat) mulai populer, menggantikan gulungan.
                    4. Abad Pertengahan
                    Manuskrip Tangan: Banyak buku ditulis dan disalin dengan tangan oleh biarawan, seringkali di biara.
                    Pengaruh Islam: Buku-buku sains, filosofi, dan sastra ditransfer ke Eropa melalui terjemahan dari bahasa Arab.
                    5. Penemuan Mesin Cetak (15th Century)
                    Johannes Gutenberg: Pada tahun 1440, Gutenberg mengembangkan mesin cetak dengan huruf bergerak, yang memungkinkan produksi buku secara massal.
                    Revolusi Buku: Buku menjadi lebih terjangkau dan tersedia bagi lebih banyak orang, yang mendukung penyebaran ilmu pengetahuan dan ide.
                    6. Era Modern
                    Penerbitan Massal: Di abad ke-19, penerbitan massal menjadi lebih umum, dengan munculnya novel dan buku-buku populer.
                    Buku Digital: Pada akhir abad ke-20, dengan munculnya internet, e-book dan platform pembaca digital (seperti Kindle) mulai menggantikan buku fisik.
                    7. Zaman Kontemporer
                    Literasi Global: Akses terhadap buku semakin meluas, baik dalam bentuk fisik maupun digital. Buku-buku juga dijadikan media untuk aktivisme dan pendidikan di seluruh dunia.
                    Pengaruh Teknologi: Buku audio dan platform seperti Wattpad dan Goodreads menjadi populer, memperluas cara orang membaca dan berbagi buku.
                </p>
                <p>KESIMPULAN</p>
                <p class="description">
                    Sejarah buku adalah cerminan dari kemajuan manusia dalam komunikasi, pendidikan, dan budaya. Dari ukiran awal hingga e-book, buku terus beradaptasi dan berkembang, tetap menjadi salah satu sumber pengetahuan terpenting bagi umat manusia.
                </p>
                <!-- Tambahkan lebih banyak konten sesuai kebutuhan -->
            </div>
        </div>
    </div>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
