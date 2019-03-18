@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            @foreach($shops as $shop)
                 
                {{$shop->user_id}} {{$shop->adress}} {{$shop->company_code}} {{$shop->vat_code}} {{$shop->phone_number}}<br>
                
            @endforeach
        </div>
    </div>
</div>
@endsection