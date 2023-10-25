@extends('header')
@section('content')
  <div class="container-fluid">
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row justify-content-center">
        <div class="col-9 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title" style="text-align:center">Services Form</h3>
              <p class="card-description "> Insert Services Details </p>

              <form class="forms-sample" method="post" action="{{route('services.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Service Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Service Title" value="{{old('title')}}">
                    <span class="text-danger">
                      @error('title')
                      {{$message}}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Short Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="3" id="role" name="shortdesc" placeholder="Enter Short Description">{{old('shortdesc')}}</textarea>
                    <span class="text-danger">
                      @error('shortdesc')
                      {{$message}}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Service Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="3" id="summernote" name="description" placeholder="Enter Description">{{old('description')}}</textarea>
                    <span class="text-danger">
                      @error('description')
                      {{$message}}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Image</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" id="image" name="image">
                    <span class="text-danger">
                      @error('image')
                      {{$message}}
                      @enderror
                    </span>
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