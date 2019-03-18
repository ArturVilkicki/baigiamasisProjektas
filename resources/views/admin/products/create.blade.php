@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <form action="{{route('products.store')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="categories_id" value="{{$_GET['id']}}">
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
                                <label for="select"> Category parrent: </label>
                                <select multiple class="form-control" id="select" name="parent_id">
                                    
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <button class="btn btn-success">Create</button>
                        </div>
                        
                        
            </form>
        </div>
    </div>
</div>
@endsection