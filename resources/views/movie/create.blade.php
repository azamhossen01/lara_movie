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

                    <form action="{{route('movies.store')}}" method="post" enctype="multipart/form-data">
                       @csrf
                       <div class="form-group">
                           <label for="title">Title</label>
                           <input type="text" name="title" id="title" placeholder="Title" class="form-control">
                       </div>

                       @forelse($actors as $actor)
                       <div class="row">
                           <div class="col-lg-6">
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" name="actor_id[]" type="checkbox" id="actor{{$actor->id}}" value="{{$actor->id}}">
                            <label class="form-check-label" for="actor{{$actor->id}}">{{$actor->name}}</label>
                              </div>
                           </div>
                           
                       </div>
                       @empty 
                       @endforelse

                       <div class="form-group">
                           <label for="image">Image</label>
                           <input type="file" name="image" id="image"  class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="description">Description</label>
                           <textarea name="description" placeholder="Movie Description" class="form-control" id="description" cols="30" rows="3"></textarea>
                       </div>
                       <button type="submit" class="btn btn-primary">Save</button>

                   </form>
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
