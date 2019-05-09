@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <form action="{{route('car.store')}}" method="POST" id="form_categories" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-row">
                                <label class="col-form-label" for="name">Car name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            
                            <div class="form-row">
                                <label class="col-form-label" for="color">Car color:</label>
                                <input type="text" name="color" class="form-control">
                            </div>
                            
                            <div class="form-row">
                                <label class="col-form-label" for="car_brand">Car Brand:</label>
                                <input type="text" name="car_brand"  class="form-control">
                            </div>
                            <div class="form-row">
                                <label class="col-form-label" for="car_model">Car model:</label>
                                <input type="text" name="car_model"  class="form-control">
                            </div>
                            <button class="btn btn-success">Create</button>
                        </div>
                        
                        
            </form>
        </div>
    </div>
</div>
@endsection