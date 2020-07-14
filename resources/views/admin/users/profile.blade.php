<x-admin-master>

    @section('content')
        <h1>User Profile for : {{$user->name}}</h1>
        <div class="row">
            <div class="col-sm-6">
                <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                    @csrf


                    <div>
                        <img src="" alt="">
                    </div>

                    <div class="form-group">
                        <input type="file">
                    </div>

                    <div class="form-group">
                        <label for="username">name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               id="username"
                               aria-describedby=""
                               placeholder="name"
                            value="{{$user->username}}">
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text"
                                   name="email"
                                   class="form-control"
                                   id="email"
                                   aria-describedby=""
                                   placeholder="email"
                                   value="{{$user->email}}">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="text"
                               name="password"
                               class="form-control"
                               id="password"
                               aria-describedby=""
                               placeholder="password"
                             >
                    </div>
                    <div class="form-group">
                        <label for="password-confirmation">Confirm Password</label>
                        <input type="text"
                               name="password-confirmation"
                               class="form-control"
                               id="password-confirmation"
                               aria-describedby=""
                               placeholder="confirm password"
                        >
                    </div>

                    <button type="submit" class="btn btn-primary">Post item!</button>
                </form>
            </div>
        </div>
    @endsection
</x-admin-master>

