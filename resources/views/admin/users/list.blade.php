@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            @foreach($users as $user)
                
                {{$user->id}} {{$user->name}} {{$user->email}} <br>
                <a class="btn btn-danger" href='{{ route('users.edit', $user->id) }}'>Edit</a>
                <form method="POST" class="delete_form" action="{{route('users.destroy', $user->id)}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
                
            @endforeach
        </div>
    </div>
</div>
@endsection