<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <form action="{{route('permissions.store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            
                            <div class="form-row">
                                <label class="col-form-label" for="permission_name">Permission name :</label>
                                <input type="text" name="permission_name" class="form-control">
                            </div>
                            <button class="btn btn-success">Create</button>
                        </div>
                        
                        
            </form>
        </div>
    </div>
</div>