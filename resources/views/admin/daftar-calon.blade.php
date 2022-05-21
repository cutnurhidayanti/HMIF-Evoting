@extends('layouts.main-admin')

@section('container')
    <h3>Data Calon Ketua HMIF</h3>
    <a href="/add-calon" class="btn btn-info">+ Add New User</a><br><br>

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 15px">
            <strong>{{ session('success') }}</strong>
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
                <td>
                    @if($data_calon->image)
                        <img src="{{ asset('storage/'.$data_calon->image) }}" alt="calon-img" class="img-fluid mt-3">
                    @else
                        <img src="img/profil-ketua.png" alt="calon-img" class="img-fluid mt-3">
                    @endif
                </td>
                <td>{{ $data_calon->nama }}</td>
                <td>{{ $data_calon->nim }}</td>
                <td>{{ $data_calon->visi }}</td>
                <td>{{ $data_calon->misi }}</td>
                <td>
                    <a href="/admin/{{ $data_calon->id}}/edit" class="badge bg-primary border-0"><i class="bi bi-pencil-square"></i></a>
                    |
                    <form action="/admin/{{ $data_calon->id}}"  method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-trash3-fill"></i></button>
                    </form> 
                </td>
            </tr>
        @endforeach
    </table>
@endsection