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

                    <form action="{{route('actors.store')}}" method="post" enctype="multipart/form-data">
                       @csrf
                       <div class="form-group">
                           <label for="name">Name</label>
                           <input type="text" name="name" id="name" placeholder="Actor Name" class="form-control">
                       </div>

                      

                       <div class="form-group">
                           <label for="image">Image</label>
                           <input type="file" name="image" id="image"  class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="description">Description</label>
                           <textarea name="description" placeholder="Actor Description" class="form-control" id="description" cols="30" rows="3"></textarea>
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
