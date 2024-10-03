<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Baca</title>
    <!-- Link ke CSS Bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <!-- Navbar -->
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

    <!-- Hero Section -->
    <header class="bg-successext-white text-center py-5 bg-primary">
        <div class="container">
            <h1 class="display-4">Discover Your Next Favorite Novel</h1>
            <p class="lead">Explore a world of stories with Ruang Baca.</p>
            <a href="#" class="btn btn-primary">Start Reading</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
        <div class="row">
            <!-- Novel Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/1003w-_tfx3kGoEw4.webp" class="card-img-top" alt="Novel Cover">
                    <div class="card-body">
                        <h5 class="card-title">Novel Title 1</h5>
                        <p class="card-text">Brief description of the novel goes here. This is a short summary or intriguing hook.</p>
                        <a href="/tampilanbuku1" class="btn btn-primary">tampilanbuku1</a>
                    </div>
                </div>
            </div>
            <!-- Novel Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/1003w-f9p1XfyrBvw.webp" class="card-img-top" alt="Novel Cover">
                    <div class="card-body">
                        <h5 class="card-title">Novel Title 2</h5>
                        <p class="card-text">Brief description of the novel goes here. This is a short summary or intriguing hook.</p>
                        <a href="/tampilanbuku2" class="btn btn-primary">tampilanbuku2</a>
                    </div>
                </div>
            </div>
            <!-- Novel Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/1003w-pdgVZMkntzE.webp" class="card-img-top" alt="Novel Cover">
                    <div class="card-body">
                        <h5 class="card-title">Novel Title 3</h5>
                        <p class="card-text">Brief description of the novel goes here. This is a short summary or intriguing hook.</p>
                        <a href="/tampilanbuku3" class="btn btn-primary">tampilanbuku3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/9786020639246_Segitiga_CU_2021_C_1_42-1.jpg" class="card-img-top" alt="Novel Cover">
                    <div class="card-body">
                        <h5 class="card-title">Novel Title 4</h5>
                        <p class="card-text">Brief description of the novel goes here. This is a short summary or intriguing hook.</p>
                        <a href="/tampilanbuku4" class="btn btn-primary">tampilanbuku4</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/_Spread_Delicious_Lips_converted_1.jpg" class="card-img-top" alt="Novel Cover">
                    <div class="card-body">
                        <h5 class="card-title">Novel Title 5</h5>
                        <p class="card-text">Brief description of the novel goes here. This is a short summary or intriguing hook.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/9786020639246_Segitiga_CU_2021_C_1_42-1.jpg" class="card-img-top" alt="Novel Cover">
                    <div class="card-body">
                        <h5 class="card-title">Novel Title 6</h5>
                        <p class="card-text">Brief description of the novel goes here. This is a short summary or intriguing hook.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2024 Ruang Baca. All rights reserved.</p>
    </footer>

    <!-- Link ke JavaScript Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
