@extends('layouts.main-user')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Perolehan Suara | Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor Urut</th>
                                    <th>Foto Pasangan Calon</th>
                                    <th>Nama Pasangan</th>
                                    <th>Jumlah Suara</th>
                                    <th>Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($candidates as $candidate)
                                <tr>
                                    <td>{{$candidate->id}}</td>
                                    <td>
                                        @if ($candidate->photo_paslon)
                                            <img src="{{asset('storage/'.$candidate->photo_paslon)}}" width="100px"/>
                                        @endif
                                    </td>
                                    <td>{{$candidate->nama_ketua.' dan '.$candidate->nama_wakil}}</td>
                                    <td>{{$candidate->users->count()}} Suara</td>
                                    <td>{{number_format(($candidate->users->count()/$jumlah)*100)}} %</td>
                                </tr>
                                @endforeach
                                <tfoot>
                                    <tr>
                                        <td colspan=10>
                                            {{$candidates->appends(Request::all())->links()}}
                                        </td>
                                    </tr>
                                </tfoot>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection