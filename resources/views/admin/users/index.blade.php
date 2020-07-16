<x-admin-master>
    @section('content')
        <h1>Users</h1>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Type</th>
                        <th>Edit</th>
                        {{--                            <th>Delete</th>--}}

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Type</th>
                        <th>Edit</th>
                        {{--                            <th>Delete</th>--}}

                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $appusers)
                        <tr>
                            <td>{{$appusers->id}}</td>
                            <td>{{$appusers->email}}</td>
                            <td>{{$appusers->name}}</td>
                            <td>{{$appusers->created_at}}</td>
                            <td>{{$appusers->usertype}}</td>

                            <td>
{{--                                <a href="{{route('post.useredit',$appusers->id)}}">{{$appusers->title}}</a>--}}
                            </td>


                            {{--                                <td>--}}
                            {{--                                    <form method="post" action="{{route('post.destroy', $post->id)}}" enctype="multipart/form-data">--}}
                            {{--                                        @csrf--}}
                            {{--                                        @method('DELETE')--}}
                            {{--                                        <button class="'btn btn-danger">Delete</button>--}}
                            {{--                                    </form>--}}

                            {{--                                </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

        @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
        @endsection
</x-admin-master>
