@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="col-md-6">
                            <div class="form-row">
                                <label class="col-form-label" for="name">Product name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-row">
                                <label class="col-form-label" for="slug">Product slug:</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            
                            
                            <div class="form-row">
                                <label class="col-form-label" for="price">Product price:</label>
                                <input type="text" name="price" step="0.01" class="form-control">
                            </div>

                            <div class="form-row">
                                <label class="col-form-label" for="description">Product description:</label>
                                <textarea type="text" name="description" class="form-control"></textarea>

                            </div>
                            <div class="form-group">
                                <label for="select"> Category parrent: </label></br>
                                @foreach($categories as $category)
                                    <input type="checkbox" name="select[]" value="{{$category->id}}">{{$category->name}}<br>
                                @endforeach
                                
                            </div>
                            <div class="form-group">
                                <label for="image">Image: </label>
                                <input type="file" name="image2" id="image2" class="form-control">
                            </div>
                            
                            <button class="btn btn-success">Create</button>
                        </div>
                        
                        
            </form>
        </div>
    </div>
</div>
@endsection