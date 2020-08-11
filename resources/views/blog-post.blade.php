<x-home-master>


    @section('content')
        <!-- Title -->

        <br>
            <h1 class="mt-4">{{$post->title}}</h1>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">{{$post->user->name}}</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>{{$post->created_at->diffForHumans()}}</p>

            <hr>

            <!-- Preview Image -->
{{--             $post->post_image below later--}}
            <img class="img-fluid rounded" src="{{$post->post_image}}" alt="">

            <hr>

            <!-- Post Content -->



            <p>{{$post->body}}</p>
            <p>Please click on the map for directions and further information in your maps app</p>
            <div><a href="https://www.google.com/maps/dir//{{$post->postcode}}/">
                    <img src="https://maps.googleapis.com/maps/api/staticmap?center={{$post->postcode}}&zoom=14&scale=false&size=600x300&maptype=roadmap&key=AIzaSyDWcQDF38pnYLsSa_uefeHcYFjlNzwhS08&format=jpg&visual_refresh=true" alt="Google Map of t6w1x3">
                </a></div>
            <hr>

            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Send a Request. Provide your contact details in the request.</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

{{--            <!-- Single Comment -->--}}
{{--            <div class="media mb-4">--}}
{{--                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
{{--                <div class="media-body">--}}
{{--                    <h5 class="mt-0">Commenter Name</h5>--}}
{{--                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Comment with nested comments -->--}}
{{--            <div class="media mb-4">--}}
{{--                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
{{--                <div class="media-body">--}}
{{--                    <h5 class="mt-0">Commenter Name</h5>--}}
{{--                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}

{{--                    <div class="media mt-4">--}}
{{--                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
{{--                        <div class="media-body">--}}
{{--                            <h5 class="mt-0">Commenter Name</h5>--}}
{{--                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="media mt-4">--}}
{{--                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
{{--                        <div class="media-body">--}}
{{--                            <h5 class="mt-0">Commenter Name</h5>--}}
{{--                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
    @endsection
</x-home-master>
