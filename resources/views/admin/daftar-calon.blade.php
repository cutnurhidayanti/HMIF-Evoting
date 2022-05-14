@extends('layouts.main-admin')

@section('container')
    <h3>Data Calon Ketua HMIF</h3>
    <a href="/add-calon">+ Add New User</a><br><br>
    
    <table class="table table-bordered mt-1">
        <tr>
            <th scope="col">No.Urut</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Visi</th>S
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
                <td>delete | update</td>
            </tr>
        @endforeach
    </table>
@endsection