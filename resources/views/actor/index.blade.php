@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-inline-block">actor List
            <a href="{{route('actors.create')}}" class="btn btn-primary float-right">Add New</a></div>
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
                                <th>Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($actors as $key=>$actor)
                                <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$actor->name}}</td>
                                <td><img src="{{asset('images/actors/'.$actor->image)}}" width="100%" alt=""></td>
                                <td>
                                <a href="{{route('actors.show',$actor->id)}}" class="btn btn-primary">Details</a>
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
