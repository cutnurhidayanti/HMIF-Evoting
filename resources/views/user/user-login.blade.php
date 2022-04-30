@extends('layouts.login')

@section('container')
<form action="/daftar" method="post" class="daftar">
    @csrf
    <div class="container justify-content-center">
        <h1>Login</h1>
        <form>
            <div class="form-group">
                <label>Email </label>
                <input type="textarea" name="nim" class="form-control" placeholder="NIM">
            </div>
            <div class="form-group">
                <label>Password </label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            
            <center><button type="submit" class="registerbtn" >Selanjutnya</button></center>

            <div class="container-signin" style="text-align: center">
                <p>Already have an account? <a href="login">Sign in</a>.</p>
            </div>
        </form>
</form>
    </form>

@endsection