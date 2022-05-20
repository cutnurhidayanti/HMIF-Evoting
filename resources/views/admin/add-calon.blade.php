@extends('layouts.main-admin')

@section('container')
{{-- isi dari layouts --}}
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-add-calon">
            <form action="/add-calon" method="post" class="daftar">
                @csrf
                    <h2>add calon</h2>
                    <form>
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="textarea" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="nama" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message  }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="textarea" name="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="NIM" required>
                            @error('nim')
                            <div class="invalid-feedback">
                                {{ $message  }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{-- <label for="visi">Visi</label> --}}
                            <div class="mb-3 col-md-12" required>
                                <label for="exampleFormControlTextarea1" class="form-label">Visi</label>
                                <textarea class="form-control @error('visi') is-invalid @enderror" name="visi" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            @error('visi')
                            <div class="invalid-feedback">
                                {{ $message  }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{-- <label for="misi">Misi</label> --}}
                            <div class="mb-3 col-md-12" required>
                                <label for="exampleFormControlTextarea1" class="form-label">Misi</label>
                                <textarea class="form-control @error('misi') is-invalid @enderror" name="misi" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            @error('misi')
                            <div class="invalid-feedback">
                                {{ $message  }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{-- untuk up foto --}}
                            {{-- <div class="mb-3">
                                <input class="form-control" name="foto" type="file" id="formFile" required>
                            </div> --}}
                            <label for="foto" class="form-label">foto</label>
                            <input type="textarea" name="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="foto" required>
                            @error('foto')
                            <div class="invalid-feedback">
                                {{ $message  }}
                            </div>
                            @enderror
                        </div>
                        
                        
                        <center><div class="btn-regist mt-1 mb-1" type="submit">
                            <button>
                                <a href="daftar-calon">
                                    <img src="icon/signup.png" alt="signup-btn" style="height: 60px">
                                </a>
                            </button>
                        </div></center>
    
                    </form>
            </form>
        </main>
    </div>
</div>
@endsection