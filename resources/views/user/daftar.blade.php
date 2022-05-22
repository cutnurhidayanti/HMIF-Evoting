@extends('layouts.main-user')
		@section('container')
    @foreach ($data_calons as $calon_ketua)
		<div class="row" style="display: inline-flex;">
	      <div class="col-sm-6">
			    <div class="card" style="width: 18rem;">

					  <img src="{{asset('storage/'.$calon_ketua->image)}}" class="card-img-top" alt="Calon">
					  <div class="card-body">
					    <h1 align="center">{{$calon_ketua->id}}</h1>
					    <h5 class="card-title">{{$calon_ketua->nama_ketua}}</h5>
					    <p class="card-text">{{$calon_ketua->visi}}</p>
					    <p class="card-text">{{$calon_ketua->misi}}</p>
					  </div>
					</div>
				</div>	
		</div>
		@endforeach

@endsection