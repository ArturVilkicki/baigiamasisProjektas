@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
        	
        	@foreach($users as $user)

        		{{$user->id}} {{$user->name}} {{$user->email}}
        	@endforeach
            
            
            
        </div>
    </div>
</div>
@endsection