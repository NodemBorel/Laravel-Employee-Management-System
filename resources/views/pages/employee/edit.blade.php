@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Edit employee Data
                        <a href="{{url('employee')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('update-employee/'.$employee->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$employee->name}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$employee->email}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phone" value="{{$employee->phone}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Designation</label>
                            <input type="text" name="designation" value="{{$employee->designation}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" {{$employee->status == 1 ? 'checked' : ''}}> Unactive-1/active-0
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection