@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-inline-block">{{$movie->title}}
            <a href="{{route('movies.index')}}" class="btn btn-primary float-right">All Movies</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="{{asset('images/movies/'.$movie->image)}}" width="100%" alt="">
                    @forelse($movie->actors as $key=>$actor)
                    <span>{{$key+1}}</span> <span><a href="{{route('actors.show',$actor->id)}}">{{$actor->name}}</a></span><br>
                    @empty 
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        function get_new_field(){
            html = `<label></label><input type="text" name="actor_id[]" class="form-control" />`;
            $('#actor').append(html);
        }
    </script>
@endpush
