@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="d-flex justify-content-end p-2">
                    <a href="{{route('permissions.create')}}" class="btn btn-primary">
                        Add Permission
                    </a>
                </div>
               
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col" class="text-center">Permission Name</th>
                
                </tr>
            </thead>
            <tbody>
            @forelse ($permissions as $permission)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$permission->name}}</td>
            
                </tr>
                @empty
                <tr>
                
                <td colspan="2" >
                    <div class="d-flex justify-content-center">
                        No Permissions Found
                    </div>  
                </td>
                
                </tr>
                @endforelse
            
            </tbody>
        </table>
            </div>
        </div>
    </div>
</div>
@endsection
