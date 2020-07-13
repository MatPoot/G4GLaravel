<x-admin-master>
    @section('content')
        <h1>Edit</h1>
        <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
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
            <div class="form-group">
                <div><img height="150px" src="{{$post->post_image}}"></div>
                <label for="file">Image</label>
                <input type="file"
                       name="post_image"
                       class="form-control"
                       id="post_image">
            </div>
            <input type="text"
                   name="postcode"
                   class="form-control"
                   id="postcode"
                   aria-describedby=""
                   placeholder="Postal Code"
                   value="{{$post->postcode}}">
            <div class="form-group">
                <textarea name="body" class="form-control" id="body" cols="15" rows="10"  >{{$post->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    @endsection
</x-admin-master>
