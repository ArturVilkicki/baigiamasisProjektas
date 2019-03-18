@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            @foreach($products as $product)
                
                {{$product->name}} {{$product->price}} {{$product->description}}<br>
                <a class="btn btn-danger" href='{{ route('products.create') }}'>Sukurti</a> 
                <a class="btn btn-danger" href='{{ route('products.edit', $product->id) }}'>Edit</a>
                <form method="POST" class="delete_form" action="{{route('products.destroy', $product->id)}}">
                	{{ csrf_field() }}
                	<input type="hidden" name="_method" value="DELETE">
                	<button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            @endforeach
        </div>
    </div>
</div>
@endsection