<x-admin-master>
    @section('content')
        <h1>Edit Role {{$role->name}}</h1>

        <div class="row">
            @if(session()->has('role-deleted'))
                <div class="alert alert-light">
                    {{session('role-updated')}}
                </div>
            @endif
        </div>

        <form method="post" action="{{route('roles.update',$role->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"
                       name="name"
                       class="form-control"
                       id="name"
                       aria-describedby=""
                       placeholder="Post title"
                       value="{{$role->name}}">
            </div>


            <button type="submit" class="btn btn-primary">update</button>
        </form>




        <div class="row">
            <div class="col-lg-12">
            @if($permissions->isNotEmpty())
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Permissions</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="RoleTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Options</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>

                                        <th>Attach</th>
                                        <th>Detach</th>
                                        <th>Delete</th>


                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Options</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Attach</th>
                                        <th>Detach</th>
                                        <th>Delete</th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td><input type="checkbox"
                                                       @foreach($role->permissions as $role_permission)
                                                       @if($role_permission->slug == $permission->slug)
                                                       checked
                                                    @endif
                                                    @endforeach


                                                ></td>
                                            <td>{{$permission->id}}</td>
                                            <td>{{$permission->name}}</td>
                                            <td>{{$permission->slug}}</td>

                                            <td><form method="post" action="{{route('roles.permission.attach',$role)}}">
                                                    @method('PUT')
                                                    @csrf

                                                    <input type="hidden" name="permission" value="{{$permission->id}}" >
                                                    <button class="btn-primary" @if($role->permissions->contains($permission)) disabled @endif >Attach</button>
                                                </form></td>


                                            <td><form method="post" action="{{route('roles.permission.detach',$role)}}">
                                                    @method('PUT')
                                                    @csrf

                                                    <input type="hidden" name="permission" value="{{$permission->id}}" >
                                                    <button class="btn-primary" @if(!$role->permissions->contains($permission)) disabled @endif >Detach</button>
                                                </form></td>



                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>



        </div>


    @endsection
</x-admin-master>
