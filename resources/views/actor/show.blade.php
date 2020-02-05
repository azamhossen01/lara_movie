@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{$actor->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Movie Name</th>
                                <th>Image</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($actor->movies as $key=>$movie) 
                                <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$movie->title}}</td>
                                <td><img src="{{asset('images/movies/'.$movie->image)}}" width="100%" alt=""></td>
                                <td><a href="{{route('movies.show',$movie->id)}}">Details</a></td>
                                </tr>
                            @empty 
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
