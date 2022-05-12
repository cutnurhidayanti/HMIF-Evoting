@extends('layouts.login')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 15px">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <main class="form-signin">
            <form action="/daftar" method="post" class="daftar">
                @csrf
                    <h2>Login</h2>
                    <form>
                        <div class="form-group">
                            <img src="icon/nim-login.png" alt="icon-login">
                            <input type="textarea" name="nim" class="form-control" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <img src="icon/pass-login.png" alt="key-login">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        
                        <center><div class="btn-regist">
                            <button type="submit" class="registerbtn" >Login</button>
                            <label style="color: #3A53AB">as Voter</label>
                        </div></center>
    
                        <div class="container-signin" style="text-align: center">
                            <p>don't have an account yet? <a href="signup">Signup</a>.</p>
                        </div>
                    </form>
            </form>
        </main>
    </div>
</div>
    </form>

@endsection