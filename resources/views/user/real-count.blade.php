@extends('layouts.main-user')

@section('container')
    @foreach ($result as $candidate)
                <input type="hidden" name="id" value="{{$candidate->id}}">
                <div class="card">
                    <h1 align="center">{{$candidate->id}}</h1>
                    <img class="card-img-top" src="{{$candidate->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 align="center" class="card-title">{{$candidate->nama}}</h5>
                    </div>
                    <div class="form-group" align="center">
                        <h5 alingn="center" class"card-title">{{$candidate->total_suara}}
                    </div>
                </div>

        @endforeach
    
@endsection