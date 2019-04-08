@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col"> -->

            @foreach($categories as $category)
            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <img src="{{url($category->img)}}" class="card-img-top" alt="categories">            
                    <div class="card-body">
                        <h5 class="card-title">{{$category->name}}</h5>
                        <p class="card-text">{{$category->description}}</p>
                        <p class="edit"><a class="btn btn-danger" href='{{ route('categories.edit', $category->id) }}'>Edit</a></p>
                        <p><form method="POST" class="delete_form" action="{{route('categories.destroy', $category->id)}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form></p>
                        
                    </div>
                </div>
            </div>     
            @endforeach
                <!-- <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{url($category->img)}}" class="card-img" alt="categories">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">{{$category->name}}</h5>
                            <p class="card-text">{{$category->description}}</p>
                            <p class="card-text">{{$category->price}}</p>
                          </div>
                        </div>
                    </div>
                </div> -->
                
                <!-- <a class="btn btn-danger" href='{{ route('categories.create') }}'>Sukurti</a> -->
                <!-- <a class="btn btn-danger" href="{{ route('products.create', ['id' => $category->id]) }}">Sukurti</a>
                <a class="btn btn-danger" href='{{ route('categories.edit', $category->id) }}'>Edit</a>
                <form method="POST" class="delete_form" action="{{route('categories.destroy', $category->id)}}">
                	{{ csrf_field() }}
                	<input type="hidden" name="_method" value="DELETE">
                	<button type="submit" class="btn btn-danger">DELETE</button>
                </form> -->
            
       <!--  </div> -->
    </div>
</div>
<script>
	$(document).ready(function(){
		$('.delete_form').on('submit', function(){

		});
	});
</script>
@endsection