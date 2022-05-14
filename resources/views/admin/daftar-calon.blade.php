@extends('layouts.main-admin')

@section('container')
    <h3>Data Calon Ketua HMIF</h3>
    <a href="/add-calon" class="btn btn-info">+ Add New User</a><br><br>

    @if(session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 15px">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <table class="table table-bordered mt-1" style="color: white">
        <tr>
            <th scope="col">No.Urut</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Visi</th>
            <th scope="col">Misi</th>
            <th scope="col">Action</th>
        </tr>
        @foreach ($data_calons as $data_calon)
            <tr>
                <td>{{ $data_calon->id }}</td>
                <td>{{ $data_calon->foto }}</td>
                <td>{{ $data_calon->nama }}</td>
                <td>{{ $data_calon->nim }}</td>
                <td>{{ $data_calon->visi }}</td>
                <td>{{ $data_calon->misi }}</td>
                <td><a href="#"><i class="bi bi-trash3-fill"></i></a> | <a href="#"><i class="bi bi-pencil-square"></i></a></td>
            </tr>
        @endforeach
    </table>
@endsection