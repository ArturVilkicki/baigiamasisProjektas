<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <form action="{{route('roles.store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            
                            <div class="form-row">
                                <label class="col-form-label" for="role_name">Role name :</label>
                                <input type="text" name="role_name" class="form-control">
                            </div>
                            <div class="checkbox">
                                    <label class="col-form-label" for="permission_select">Permission select :</label>

                                    @foreach($permissions as $permission)
                                        <label><input type="checkbox" value="{{$permission->id}}" name="permission_select[]">{{$permission->name}}</label>
                                    @endforeach
                                    
                                </div>
                            <button class="btn btn-success">Create</button>
                        </div>
                        
                        
            </form>
        </div>
    </div>
</div>