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
                    Add Post
                    <a href="{{url('posts')}}" class="btn btn-danger float-end">Back</a>
                </div>

                <div class="card-body">
                <form action="{{url('posts')}}" method="post">
                    @csrf
                        <div class="form-group md-3">
                            <label for="">title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group md-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group md-3">
                            <label for="">status</label>
                            <input type="checkbox" name="status"> 0=show, 1=hide
                        </div>
                        <div class="form-group md-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
