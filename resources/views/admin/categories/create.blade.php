@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <form action="{{route('categories.store')}}" method="POST" id="form_categories" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-row">
                                <label class="col-form-label" for="name">Category name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            
                            <div class="form-row">
                                <label class="col-form-label" for="slug">Category slug:</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            
                            <div class="form-row">
                                <label class="col-form-label" for="description">Category description:</label>
                                <input type="text" name="description"  class="form-control">
                            </div>

                            <div class="form-row">
                                <label class="col-form-label" for="img">Category img:</label>
                                <input type="text" name="img" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="select"> Category parrent: </label>
                                <select multiple class="form-control" id="select" name="parent_id">
                                    <option value="0">0</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="img">Image: </label>
                                <input type="file" name="img" id="img" class="form-control">
                            </div>
                            <button class="btn btn-success">Create</button>
                        </div>
                        
                        
            </form>
        </div>
    </div>
</div>
@endsection