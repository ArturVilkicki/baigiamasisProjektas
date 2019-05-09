@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            @foreach($cars as $car)
                {{$car->name}} {{$car->color}} {{$car->brand}} {{$car->model}}
                <a class="btn btn-danger" href='{{ route('car.create') }}'>Sukurti</a></br> 
                <a class="btn btn-danger" href='{{ route('car.edit', $car->id) }}'>Edit</a>
                <form method="POST" class="delete_form" action="{{route('car.destroy', $car->id)}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            @endforeach
        </div>
    </div>
</div>
@endsection`