@extends('header')
@section('content')
  <div class="container-fluid">
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row justify-content-center">
        <div class="col-9 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title" style="text-align:center">Services Update Form</h3>
              <p class="card-description "> Update Services Details </p>

              <form class="forms-sample" method="post" action="{{route('services.update',$service->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Service Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title" value="{{$service->title}}">
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Short Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="3" id="role" name="shortdesc" placeholder="Enter Short Description">{{$service->shortdesc}}</textarea>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Service Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="3" id="summernote" name="description" placeholder="Enter Description">{{$service->description}}</textarea>
                  </div>
                </div>

                <p>Current Image</p>
                <img style="height:200px;width:200px" src="/images/{{$service->image}}" alt=""><br>
                <p>Choose Image to Update</p>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Image</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" id="image" name="image">
                  </div>
                </div>
                   <div style="margin-left:100px" class="mt-3">
                      <button type="submit" class="btn btn-primary mr-2 mt-2" name="submit">Submit</button>
                      <button class="btn btn-dark mt-2" >Cancel</button>
                   </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
        $(document).ready(function() {
            $("#summernote").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endsection