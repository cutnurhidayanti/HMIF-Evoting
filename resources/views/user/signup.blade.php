@extends('layouts.login')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signup">
            <form action="/daftar" method="post" class="daftar">
                @csrf
                    <h2>Register</h2>
                    <form>
                        <div class="form-group">
                            <img src="icon/nim-login.png" alt="icon-login">
                            <input type="textarea" name="nama" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <img src="icon/nim-login.png" alt="icon-login">
                            <input type="textarea" name="nim" class="form-control" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <img src="icon/nim-login.png" alt="icon-login">
                            <input type="textarea" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <img src="icon/pass-login.png" alt="key-login">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <img src="icon/pass-login.png" alt="key-login">
                            <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password">
                        </div>
                        
                        <center><div class="btn-regist mt-1 mb-1">
                            <a href="user-login">
                                <img src="icon/signup.png" alt="signup-btn" style="height: 60px">
                            </a>
                        </div></center>
    
                        <div class="container-signin" style="text-align: center">
                            <p>Already have an account? <a href="user-login">Sign in</a>.</p>
                        </div>
                    </form>
            </form>
        </main>
    </div>
</div>
    </form>

@endsection