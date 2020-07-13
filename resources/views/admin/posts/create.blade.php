<x-admin-master>
    @section('content')
        <h1>Create</h1>
        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text"
                       name="title"
                       class="form-control"
                       id="title"
                       aria-describedby=""
                       placeholder="Post title" >
                <input type="text"
                       name="postcode"
                       class="form-control"
                       id="postcode"
                       aria-describedby=""
                       placeholder="Postal Code" >
            </div>
            <div class="form-group">
                <label for="file">Image</label>
                <input type="file"
                       name="post_image"
                       class="form-control"
                       id="post_image">
            </div>
            <div class="form-group">
                <textarea name="body" class="form-control" id="body" cols="15" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post item!</button>
        </form>
    @endsection
</x-admin-master>
