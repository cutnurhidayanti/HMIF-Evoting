@extends('layouts.main-admin')

@section('container')
{{-- isi dari layouts --}}
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-add-calon">
            <form action="/add-calon" method="post" class="daftar">
                @csrf
                    <h2>Edit calon</h2>
                    <form>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="textarea" name="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="foto" required>
                            @error('foto')
                            <div class="invalid-feedback">
                                {{ $message  }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="textarea" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="nama" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message  }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="textarea" name="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="NIM" required>
                            @error('nim')
                            <div class="invalid-feedback">
                                {{ $message  }}
                            </div>
                            @enderror
                        </div>
                        <label for="visi">Visi</label>
                        <div class="form-group">
                            <input type="textarea" name="visi" class="form-control @error('visi') is-invalid @enderror" placeholder="visi" required>
                            @error('visi')
                            <div class="invalid-feedback">
                                {{ $message  }}
                            </div>
                            @enderror
                        </div>
                        <label for="misi">Misi</label>
                        <div class="form-group">
                            <input type="textarea" name="misi" class="form-control @error('misi') is-invalid @enderror" placeholder="misi" required>
                            @error('misi')
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