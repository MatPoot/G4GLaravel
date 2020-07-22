<x-admin-master>
    @section('content')


        <h1>Permissions</h1>

            <div class="row">

                <div class="col-sm-3">
                    <form method="post" action="{{route('permissions.store')}}">
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
                        <button type="submit" class="btn btn-primary btn-block">Create Permission</button>

                    </form>


                </div>
            </div>

        <div class="col-sm-9">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Permissions</h6>
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
                            @foreach($permissions as $permission)
                                <tr>
                                    <td>{{$permission->id}}</td>
                                    <td>{{$permission->name}}</td>
                                    <td>{{$permission->slug}}</td>

                                    <td><a href="{{route('permissions.edit',$permission->id)}}">Edit</a></td>
                                    <td>

                                        <form method="post" action="{{route('permissions.destroy', $permission->id)}}" enctype="multipart/form-data">
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
    @endsection
</x-admin-master>
