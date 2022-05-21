@extends('layouts.main-admin')

@section('container')

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 15px">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

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
                <td>
                    <a href="/admin/{{ $data_user->id}}/edit" class="badge bg-primary border-0"><i class="bi bi-pencil-square"></i></a>
                    |
                    <form action="/admin/{{ $data_user->id}}"  method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-trash3-fill"></i></button>
                    </form> 
                </td>
            </tr>
        @endforeach
    </table>
@endsection