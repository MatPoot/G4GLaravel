<x-admin-master>

    @section('content')
        <h1>User Profile for : {{$user->name}}</h1>
        <div class="row">
            <div class="col-sm-6">
                <form method="post" action="{{route('user.profile.update',$user->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <img class="img-profile rounded-circle" src="">
                    </div>

                    <div class="form-group">
                        <input type="file" name="avatar">
                    </div>

                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text"
                               name="username"
                               class="form-control"
                               id="username"
                               aria-describedby=""
                               placeholder="name"
                               value="{{$user->username}}">

                        @error('username')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               id="name"
                               aria-describedby=""
                               placeholder="name"
                               value="{{$user->name}}">

                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>


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

                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror


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

                    @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
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

                    @error('password-confirmation')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    @endsection
</x-admin-master>

