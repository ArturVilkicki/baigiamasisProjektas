@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">

            @foreach($categories as $category)

                <div class="card" style="width: 18rem;">
                  <img src="{{url($category->img)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$category->name}}</h5>
                    <p class="card-text">{{$category->description}}</p>
                    <a href="#" class="btn btn-primary">Perziureti</a>
                  </div>
                </div>
                {{$category->name}} {{$category->slug}} {{$category->description}}<br/>
                <!-- <a class="btn btn-danger" href='{{ route('categories.create') }}'>Sukurti</a> -->
                <!-- <a class="btn btn-danger" href="{{ route('products.create', ['id' => $category->id]) }}">Sukurti</a>
                <a class="btn btn-danger" href='{{ route('categories.edit', $category->id) }}'>Edit</a>
                <form method="POST" class="delete_form" action="{{route('categories.destroy', $category->id)}}">
                	{{ csrf_field() }}
                	<input type="hidden" name="_method" value="DELETE">
                	<button type="submit" class="btn btn-danger">DELETE</button>
                </form> -->
            @endforeach
        </div>
    </div>
</div>
<script>
	$(document).ready(function(){
		$('.delete_form').on('submit', function(){

		});
	});
</script>
@endsection