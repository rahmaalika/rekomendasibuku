<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1 class="title">Judul Buku</h1>
            <h2 class="author">Selamanya Di Hatimu</h2>
            <p class="description">
                Ini adalah deskripsi buku. Buku ini membahas berbagai tema menarik dan memberikan wawasan yang mendalam.
            </p>
            <img src="img/1003w-_tfx3kGoEw4.webp" style="width: 50%;" alt="">
            <div class="content">
                <h3>Isi Buku</h3>
                <p>Paragraf pertama</p>
                <p class="description">
                    Pada suatu hari si kancil bertemu dengan harimau ketika sedang bermain di pegunungan. Tanpa ragu, sang harimau mengira si kancil akan bisa menjadi makan siangnya yang lezat. Namun, si Kancil rupanya telah melihat penampakan Harimau dan berpura-pura tenang sembari berkata, “Harimau, kamu sangat tampan. Kepala, wajah, tubuh, dan kaki kamu semuanya begitu sempurna dan tidak ada tandingannya di hutan ini. Sayangnya, ekormu sangat jelek sehingga tidak bisa mengimbangi kehebatanmu yang lain itu.” Harimau termakan hasutan si kancil dan merasa ucapannya tadi benar, jadi dia bertanya kepada kancil, "Bagaimana aku bisa membuat ekorku menjadi indah?" Kancil kemudian melihat sekeliling ekor harimau, seolah-olah sedang memeriksanya, dan memberitahu sang harimau, "Kalau kamu bisa membuatnya lurus, ekormu pasti akan terlihat sangat indah."
                </p>
                <p>Paragraf kedua isi buku...</p>
                <p class="description">
                    Kancil mengumpulkan sembilan ikat jarum pinus dengan cepat, lalu mengikat ekor harimau ke pohon sambil membakar jarum pinus tadi. Harimau merasa kepanasan karena harus menahan api. Walhasil, rambut di sekujur tubuhnya malah terbakar habis. Harimau pun marah, “Kamu benar-benar Kancil yang bodoh! Ekorku memang terlihat lurus, tetapi kamu telah membakar pakaianku. Aku tidak akan memaafkanmu!"
                </p>
                <!-- Tambahkan lebih banyak konten sesuai kebutuhan -->
            </div>
        </div>
    </div>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
