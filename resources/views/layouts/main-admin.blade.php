<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/layouts/main.css">
        
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

        {{-- fav icon --}}
        <link rel="shortcut icon" href="img/informatics-logo-hd.png" type="image/x-icon">

        {{-- custom css --}}
        <link rel="stylesheet" href="css/user/signup.css">

        <title>HMIF | {{ $tittle }}</title>
    </head>
    <body>

        {{-- logo & profil --}}
        <div class="logo-profil">
            <div class="logo">
                <img src="img/informatics-logo-hd.png" alt="logo-informatika">
                <div class="logo-text">
                    <h5><strong>INFORMATIKA</strong></h5>
                    <small><i>E-Voting</i></small>
                </div>
            </div>
            <div class="profil">
                <h5>yanti</h5>
                <img src="icon/nim-login.png" alt="person">
            </div>
        </div>

        {{-- Navbar --}}
        <div id="mySidenav" class="sidenav">
            <a href="/beranda-admin" id="Beranda">Beranda</a>
            <a href="/daftar-calon" id="Daftar-Calon">Daftar Calon</a>
            <a href="/data-pemilih" id="data-pemilih">Data Pemilih</a>
            
            <form action="/logout" method="post">
                @csrf
                {{-- <button>
                    <a href="#">Logout</a>
                </button> --}}
                
                <button type="submit" id="Logout">Logout</button>
            </form>
        </div>
        {{-- akhir Navbar --}}

    
        <div class="container">
            @yield('container')
        </div>
        
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
