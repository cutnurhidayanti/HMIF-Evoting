<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        {{-- css custom --}}
        <link rel="stylesheet" href="css/halaman-utama.css">

        <title>HMIF | Halaman Utama</title>
    </head>
    <body>
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #2B2974;">
                <div class="container" >
                    <nav class="navbar navbar-light" >
                        <div class="container" >
                            <a class="navbar-brand" href="/">
                                <img src="img/logo-infor.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
                                <strong>INFORMATIKA</strong>
                            </a>
                        </div>
                    </nav>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ ($tittle === "Home") ? 'active' : '' }}" aria-current="page" href="signup">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($tittle === "Home") ? 'active' : '' }}" href="user-login">Log In</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
            {{-- akhir navbar --}}

            {{-- jumbotron --}}
            <div class="jumbotron jumbotron-fluid ms-5 ">
                <div class="row">
                    <div class="d-flex">
                        <div class="justify-content-start col-md-6">
                            <h1 class="display-2"><strong>Informatika E-Voting</strong></h1>
                            <h1 class="display-3"><strong>Universitas Syiah Kuala</strong></h1>
                            <p class="lead">Bersama Himpunan Mahasiswa Informatika Universitas Syiah Kuala menciptakan mahasiswa yang aktif, interaktif, kreatif serta inovatif dalam bidang iptek dan imtaq. Dan menciptakan dan meningkatkan rasa kekeluargaan antar seluruh anggota Himpunan Mahasiswa Informatika.</p>
                            {{-- button read more --}}
                            <button class="button readmore" href="read-more">Read More ></button>  {{-- ini perhatikan lagi --}}
                        </div>
                        {{-- gambar --}}
                        <img id="vote" src="img/Voting.png" alt="voting">
                        {{-- akhir gambar --}}
                    </div>
                    
                    
                    
                </div>
            </div>
            {{-- akhir jumbotron --}}

            {{-- evoting mark --}}
            <div class="evoting-mark">
                <p><strong>VALORANTGO</strong></p>
            </div>
            

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>