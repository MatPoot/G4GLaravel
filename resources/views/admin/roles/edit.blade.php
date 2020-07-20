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
    @endsection
</x-admin-master>
