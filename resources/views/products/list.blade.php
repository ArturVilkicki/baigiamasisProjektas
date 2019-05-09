@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Slug</th>
                      <th scope="col">Description</th>
                      <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>
                        {{$product->name}}
                    </td>
                    <td>
                        {{$product->price}}
                    </td>
                    <td>
                        {{$product->slug}}
                    </td>
                    <td>
                        {{$product->description}}
                    </td>
                    <td>
                        <img src="{{ asset($product->image) }}" />
                    </td>
                </tr>
                @endforeach
                </tbody>
           <!--  @foreach($products as $product)
                
                {{$product->name}} {{$product->price}} {{$product->description}}<br>
                <a class="btn btn-danger" href='{{ route('products.create') }}'>Sukurti</a> 
                <a class="btn btn-danger" href='{{ route('products.edit', $product->id) }}'>Edit</a>
                <form method="POST" class="delete_form" action="{{route('products.destroy', $product->id)}}">
                	{{ csrf_field() }}
                	<input type="hidden" name="_method" value="DELETE">
                	<button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            @endforeach -->
        </div>
    </div>
</div>
@endsection