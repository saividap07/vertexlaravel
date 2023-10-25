@extends('header')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Services Table</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="font-weight-bold text-primary mr-auto"></h6>
                <div>
                        <a class="btn btn-primary" href="/services/create" role="button">Add New</a>
                </div>
            </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Image</th>
                        <th>Show</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Image</th>
                        <th>Show</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($service as $s)
                    <tr>
                        <td>{{$s->id}}</td>
                        <td>{{$s->title}}</td>
                        <td>{{$s->shortdesc}}</td>
                        <td><img style="height:150px;width:150px" src="/images/{{$s->image}}" alt=""></td>
                        <td><a href="{{route('services.show',$s->id)}}">Show</a></td>
                        <td><a href="{{route('services.edit',$s->id)}}">Update</a></td>
                        <td>
                        <form action="{{route('services.destroy',$s->id)}}" method="post">
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