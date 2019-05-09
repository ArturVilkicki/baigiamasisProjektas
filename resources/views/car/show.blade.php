@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
        	
        	
            
            {{$car->name}} {{$car->color}} {{$car->car_brand}} {{$car->car_model}}
            
        </div>
    </div>
</div>
@endsection