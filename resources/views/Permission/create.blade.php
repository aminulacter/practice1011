@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('permissions.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Permission Name</label>
                    <input type="text" class="form-control" name="name" id="permissionName" placeholder="Permission Name">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror               
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection