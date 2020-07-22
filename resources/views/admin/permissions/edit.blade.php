<x-admin-master>

    @section('content')
        <h1>Edit Permission: {{$permission->name}}</h1>



        <form method="post" action="{{route('permissions.update',$permission->id)}}" enctype="multipart/form-data">
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
                       value="{{$permission->name}}">
            </div>


            <button type="submit" class="btn btn-primary">update</button>
        </form>


        @endsection






</x-admin-master>
