@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-inline-block">Movie List
            <a href="{{route('movies.create')}}" class="btn btn-primary float-right">Add New</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($movies as $key=>$movie)
                                <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$movie->title}}</td>
                                <td>
                                <a href="{{route('movies.show',$movie->id)}}" class="btn btn-primary">Details</a>
                                </td>
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
