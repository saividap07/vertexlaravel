@extends('header')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Postfolio Table</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="font-weight-bold text-primary mr-auto"></h6>
                <div>
                        <a class="btn btn-primary" href="/portfolio/create" role="button">Add New</a>
                </div>
            </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($portfolio as $f)
                    <tr>
                        <?php
                        if($f->type=="Mobile Application")
                        $style="height:190px;width:100px";
                        else
                        $style="height:100px;width:125px";
                        ?>
                        <td>{{$f->id}}</td>
                        <td>{{$f->title}}</td>
                        <td>{{$f->description}}</td>
                        <td>{{$f->type}}</td>
                        <td><img style="<?php echo $style ?>" src="/images/{{$f->image}}" alt=""></td>
                        <td>{{$f->link}}</td>
                        <td><a href="{{route('portfolio.edit',$f->id)}}">Update</a></td>
                        <td>
                        <form action="{{route('portfolio.destroy',$f->id)}}" method="post">
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