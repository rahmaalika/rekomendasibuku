<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <Main>
        <!-- <section class="container-fluid bg-success" style="height: 60vh;"> -->
        <div class="container">
            <div class="text-center text-black" style="font-size: 35px; margin-left: 200px">NOVEL</div>
            <div class="row">
                <div class="col-3 border">
                    <img src="img/1003w-_tfx3kGoEw4.webp" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <div class="text-center text-black" style="font-size: 20px; margin-bottom: 20px; padding-top: 90px;">
                        Novel termasuk dalam jenis buku fiksi. Dalam Kamus Besar Bahasa Indonesia, novel adalah karangan prosa yang panjang mengandung rangkaian cerita kehidupan seseorang dengan orang di sekelilingnya dengan menonjolkan watak dan sifat pelaku. Sementara dilansir dari Encyclopaedia Britannica (2015), novel merupakan sebuah narasi prosa yang diciptakan dengan panjang yang cukup dan kompleksitas tertentu. Istilah novel diambil dari bahasa Itali, yakni nonella yang merupakan bentuk jamak dari novellus.Novel adalah karya sastra yang berbentuk prosa panjang yang berisi cerita fiksi tentang kehidupan manusia dan masyarakat. Novel merupakan hasil imajinasi pengarang yang dicampur dengan gambaran kehidupan di sekitarnya. 
                    </div>
                </div>
            </div>
        </div>
        <!-- </section> -->
        <section>
            <div class="container p-5">
                <div class="text-center fw-bold" style="font-size: 30px; margin-left: 200px;">REKOMENDASI BUKU</div>
            </div>
            <div class="row mt-3 mb-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/1003w-_tfx3kGoEw4.webp" width="70%" style="margin-left: 25%;" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="img/1003w-f9p1XfyrBvw.webp" width="70%" style="margin-left: 20%;" alt="">
                </div>
                <div class="col-md-4">
                    <img src="img/1003w-pdgVZMkntzE.webp" width="70%" style="margin-left: 10%;" alt="">
                </div>
            </div>
            <div class="row mt-3 mb-4">
                <div class="col-md-4">
                    <img src="img/308afcdf-b1bb-4ddc-a849-f022fb6fb518_43.jpeg" width="70%" style="margin-left: 25%;" alt="">
                </div>
                <div class="col-md-4">
                    <img src="img/9786020639246_Segitiga_CU_2021_C_1_42-1.jpg" width="70%" style="margin-left: 20%;" alt="">
                </div>
                <div class="col-md-4">
                    <img src="img/9786022918424.jpg" width="70%" style="margin-left: 10%;" alt="">
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid bg-success" style="height: 50vh;">
                <div class="container">
                    <div class="text-center text-white fw-bold" style="font-size: 25px;">Tentang Buku</div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-white" style="font-size: 20px; padding-top: 8%;">Moral dari kisah kancil tersebut yang dapat Bunda ajarkan kepada anak-anak ialah ketika ada yang menolong, sudah seharusnya berterima kasih dan membalas kebaikan tersebut. Jangan sampai kebaikan tersebut dibalas dengan kejahatan seperti apa yang dilakukan buaya kepada kerbau.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-white" style="font-size: 20px; padding-top: 8%;">Dongeng kali ini, menceritakan tentang kesombongan kancil sebagai binatang hutan. Kisah bermula dari Kancil yang merasa jika dirinya adalah hewan paling cerdik dan pandai di hutan. Saking yakinnya, si kancil sampai menyombongkan hal tersebut di hadapan binatang lainnya. 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section>
            <div class="container">
                <h4 class="text-center text-dark mt-3">CONTACT ME</h4>
                <form action="" class="p-5">
                    <input type="text" name="" class="form-control border-end-0 border-start-0 border-top-0 mb-4"
                        placeholder="Nama" id="">
                    <input type="text" name="" class="form-control border-end-0 border-start-0 border-top-0 mb-4"
                        placeholder="Email" id="">
                    <input type="number" name="" class="form-control border-end-0 border-start-0 border-top-0 mb-4"
                        placeholder="Phone" id="">
                    <textarea name="" class="form-control border-end-0 border-start-0 border-top-0 rows-4"
                        placeholder="Message" id=""></textarea>
                    <button class="btn btn-success mt-4">SEND</button>
                </form>
            </div>
        </section>
        <section>
            <div class="container-fluid" style="background-color: rgb(78, 77, 77);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="text-center text-white mt-3" style="margin-left: 40%;">
                                Location
                            </h5>
                            <p class="text-center text-white mt-3" style="margin-left: 40%;">
                                Singaparna, Kab. Tasikmalaya Provinsi. Jawabarat
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center text-white mt-3" style="margin-left: 60%;">
                                About Prilance
                            </h5>
                            <p class="text-center text-white mt-3;" style="margin-left: 60%;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section>
            <div class="container-fluid" style="background-color: black;">
                <small class="text-white text-center" style="margin-left: 50%;">Ruang Baca 2024</small>
            </div>
        </section>
    </Main>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html> 