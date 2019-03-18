@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            @foreach($permissions as $permission)
                {{$permission->id}} {{$permission->name}}
                <a class="btn btn-danger" href='{{ route('permissions.create') }}'>Sukurti</a></br> 
            @endforeach
        </div>
    </div>
</div>
@endsection