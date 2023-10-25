@extends('header')
@section('content')
  <div class="container-fluid">
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row justify-content-center">
        <div class="col-9 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title" style="text-align:center">Projects Form</h3>
              <p class="card-description "> Insert Project Details </p>

              <form class="forms-sample" method="post" action="{{route('portfolio.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Project Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Project Title" value="{{old('title')}}">
                    <span class="text-danger">
                      @error('title')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Project Description</label>
                  <div class="col-sm-9">
                    <textarea rows="3" class="form-control" id="desc" name="desc" placeholder="Enter Project Description">{{old('desc')}}</textarea>
                    <span class="text-danger">
                      @error('desc')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Project Type</label>
                  <div class="col-sm-9">
                    <select name="type" id="type" value="{{old('type')}}" class="form-control">
                        <option value="">Select Project Type</option>
                        <option value="Mobile Application">Mobile Application</option>
                        <option value="Web Application">Web Application</option>
                    </select>
                    <span class="text-danger">
                      @error('type')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Application Link</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="link" name="link" placeholder="Enter Project Link" value="{{old('link')}}">
                    <span class="text-danger">
                      @error('link')
                        {{$message}}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Application Photo</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" id="image" name="image" value="old('image')">
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
@endsection