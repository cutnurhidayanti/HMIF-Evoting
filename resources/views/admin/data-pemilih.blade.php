@extends('layouts.main-admin')

@section('container')
<table class="table table-bordered mt-1" style="color: white">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        {{-- <th scope="col">Status</th> --}}
        <th scope="col">Action</th>
    </tr>
    @foreach ($data_Users as $data_user)
        <tr>
            <td>{{ $data_user->id }}</td>
            <td>{{ $data_user->name }}</td>
            <td>{{ $data_user->nim }}</td>
            {{-- <td>{{ $data_user->status }}</td> --}}
            <td><a href="#"><i class="bi bi-trash3-fill"></i></a> | <a href="#"><i class="bi bi-pencil-square"></i></a></td>
        </tr>
    @endforeach
</table>
@endsection