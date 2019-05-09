@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <form action="{{route('car.update', $id)}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" class="form-control" value="PATCH">
                        
                            <div class="form-group">
                                <input type="text" name="name" class="form-group" value="{{$car->name}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="color" class="form-group" value="{{$car->color}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="car_brand" class="form-group" value="{{$car->brand}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="car_model" class="form-group" value="{{$car->model}}">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn primary" value="Edit">
                            </div>
                            
                        
                        
                        
            </form>
        </div>
    </div>
</div>
@endsection