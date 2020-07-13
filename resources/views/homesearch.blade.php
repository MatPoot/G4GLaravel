<x-search-master>
    @section('content')
        <h1>All Posts</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Listings</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>

                            <th>Title</th>
                            <th>UserName</th>

                            <th>Image</th>
                            <th>Created</th>



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>

                            <th>Title</th>
                            <th>UserName</th>

                            <th>Image</th>
                            <th>Created</th>



                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>

                                <td>{{$post->title}}</td>
                                <td>{{$post->user->name}}</td>

                                <td><img height="40" src="{{$post->post_image}}" alt="image"></td>

                                <td>{{$post->created_at}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
</x-search-master>
