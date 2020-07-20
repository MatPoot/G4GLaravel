<x-admin-master>
    @section('content')

            <div class="row">
                @if(session()->has('role-deleted'))
                    <div class="alert alert-danger">
                        {{session('role-deleted')}}
                    </div>
                @endif
            </div>
        <h1>Roles</h1>
        <div class="row">

            <div class="col-sm-3">
                <form method="post" action="{{route('roles.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Role Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                        <div>
                            @error('name')
                            <span><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Create Role</button>

                </form>


            </div>
            <div class="col-sm-9">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Roles</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="RoleTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>

                                    <th>Edit</th>
                                    <th>Delete</th>


                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>

                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->slug}}</td>

                                        <td><a href="{{route('roles.edit',$role->id)}}">Edit</a></td>
                                        <td>

                                                <form method="post" action="{{route('roles.destroy', $role->id)}}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="'btn btn-danger">Delete</button>
                                                </form>

                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @endsection
</x-admin-master>
