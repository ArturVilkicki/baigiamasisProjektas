@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <form action="{{route('shops.store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            
                            <div class="form-row">
                                <label class="col-form-label" for="adress">Adress :</label>
                                <input type="text" name="adress" class="form-control">
                            </div>
                            
                            <div class="form-row">
                                <label class="col-form-label" for="company_code">Company code:</label>
                                <input type="text" name="company_code" class="form-control">
                            </div>

                            <div class="form-row">
                                <label class="col-form-label" for="vat_code">Vat Code:</label>
                                <textarea type="text" name="vat_code" class="form-control"></textarea>

                            </div>
                            <div class="form-row">
                                <label class="col-form-label" for="phone_number">Phone number:</label>
                                <textarea type="text" name="phone_number" class="form-control"></textarea>

                            </div>
                            
                            <button class="btn btn-success">Create</button>
                        </div>
                        
                        
            </form>
        </div>
    </div>
</div>
@endsection