@extends('header')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Services Table</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <tr>
                        <td>Title</td>
                        <td><?php echo $service->title?></td>
                    </tr>
                    <tr>
                        <td>Short Description</td>
                        <td><?php echo $service->shortdesc?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><?php echo $service->description?></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><img style="height:200px;width:200px" src="/images/{{$service->image}}" alt=""></td>
                    </tr>
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