<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        {{-- fav icon --}}
        <link rel="shortcut icon" href="img/informatics-logo-hd.png" type="image/x-icon">

        {{-- css custom --}}
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/user/user-login.css">

        <title>HMIF | {{ $tittle }}</title>
    </head>
    <body>

        <div class="wrapper-up">
            <img src="img/informatics-logo-hd.png" alt="logo-informatika" class="logo" style="width: 140px; height=140px" >
            <h3><strong>INFORMATIKA</strong></h3>
            <h5><i>E-Voting</i></h5>
        </div>

        {{-- isi dari layouts --}}
        <div class="container">
            @yield('container')
        </div>

        <div class="evoting-mark">
            <p><strong>VALORANTGO</strong></p>
        </div>
        
        <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>