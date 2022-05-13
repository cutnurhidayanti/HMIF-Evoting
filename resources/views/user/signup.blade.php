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
        <link rel="stylesheet" href="css/user/signup.css">

        <title>HMIF | {{ $tittle }}</title>
    </head>
    <body>

        <div class="wrapper-up">
            <img src="img/informatics-logo-hd.png" alt="logo-informatika" class="logo" style="width: 100px; height=100px" >
            <h4><strong>INFORMATIKA</strong></h4>
        </div>

        {{-- isi dari layouts --}}
        <img src="img/orangregister.png" class="orangregist" alt="register">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="form-signup">
                    <form action="/signup" method="post" class="daftar">
                        @csrf
                            <h2>Register</h2>
                            <form>
                                <div class="form-group">
                                    <img src="icon/nim-login.png" alt="icon-login">
                                    <input type="textarea" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="name" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message  }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="icon/nim-login.png" alt="icon-login">
                                    <input type="textarea" name="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="NIM" required>
                                    @error('nim')
                                    <div class="invalid-feedback">
                                        {{ $message  }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="icon/nim-login.png" alt="icon-login">
                                    <input type="textarea" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message  }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="icon/pass-login.png" alt="key-login">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message  }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="icon/pass-login.png" alt="key-login">
                                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Confirm Password" required>
                                    @error('confirm_password')
                                    <div class="invalid-feedback">
                                        {{ $message  }}
                                    </div>
                                    @enderror
                                </div>
                                
                                <center><div class="btn-regist mt-1 mb-1" type="submit">
                                    <button>
                                        <a href="user-login">
                                            <img src="icon/signup.png" alt="signup-btn" style="height: 60px">
                                        </a>
                                    </button>
                                </div></center>
            
                                <div class="container-signin" style="text-align: center">
                                    <p>Already have an account? <a href="user-login">Sign in</a></p>
                                </div>
                            </form>
                    </form>
                </main>
            </div>
        </div>

        <div class="evoting-mark">
            <p><strong>VALORANTGO</strong></p>
        </div>
        
        <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
