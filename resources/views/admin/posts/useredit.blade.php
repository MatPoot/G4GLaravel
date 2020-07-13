<x-admin-master>
    @section('content')
        <h1>Edit</h1>
    <h3>{{$users->name}}</h3>
    <h4>{{$users->email}}</h4>
        <form method="post" action="{{route('post.userupdate',$users->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text"
                       name="title"
                       class="form-control"
                       id="title"
                       aria-describedby=""
                       placeholder="Post title"
                       value="{{$post->title}}">
            </div>
            <select id="usertype" name="usertype">
                <option value="giver">giver</option>
                <option value="receiver">receiver</option>
                <option value="Organization">org</option>
            </select>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    @endsection
</x-admin-master>
