@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            @foreach($roles as $role)
                {{$role->name}}
                <a class="btn btn-danger" href='{{ route('roles.create') }}'>Sukurti</a></br>
                 
            @endforeach
        </div>
    </div>
</div>
@endsection