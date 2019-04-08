@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <form action="{{route('categories.update', $id)}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" class="form-control" value="PATCH">
                        
                            <div class="form-group">
                                <input type="text" name="name" class="form-group" value="{{$category->name}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="slug" class="form-group" value="{{$category->slug}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="description" class="form-group" value="{{$category->description}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="img" class="form-group" value="{{$category->img}}">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn primary" value="Edit">
                            </div>
                            
                        
                        
                        
            </form>
        </div>
    </div>
</div>
@endsection