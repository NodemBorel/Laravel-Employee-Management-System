@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(session('confirm'))
                    <div class="alert alert-success">
                        {{session('confirm')}}
                    </div>
                @endif
                <div class="card-header">
                    Edit Post
                    <a href="{{url('posts')}}" class="btn btn-danger float-end">Back</a>
                </div>

                <div class="card-body">
                <form action="{{url('posts/'.$post->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group md-3">
                            <label for="">title</label>
                            <input type="text" name="title" value="{{$post->title}}" class="form-control">
                        </div>
                        <div class="form-group md-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" rows="3">{{$post->description}}</textarea>
                        </div>
                        <div class="form-group md-3">
                            <label for="">status</label>
                            <input type="checkbox" {{$post->status == '1' ? 'checked':''}} name="status"> 0=show, 1=hide
                        </div>
                        <div class="form-group md-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
