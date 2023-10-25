@extends('header')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Testimonials Table</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="font-weight-bold text-primary mr-auto"></h6>
                <div>
                        <a class="btn btn-primary" href="/testimonials/create" role="button">Add New</a>
                </div>
            </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Review</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Review</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($testimonials as $test)
                    <tr>
                        <td>{{$test->id}}</td>
                        <td>{{$test->name}}</td>
                        <td>{{$test->role}}</td>
                        <td>{{$test->review}}</td>
                        <td><img style="height:150px;width:150px" src="/images/{{$test->image}}" alt=""></td>
                        <td><a href="{{route('testimonials.edit',$test->id)}}">Update</a></td>
                        <td>
                        <form action="{{route('testimonials.destroy',$test->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection