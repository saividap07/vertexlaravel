@extends('header')
@section('content')
<div class="container-fluid">
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row justify-content-center">
        <div class="col-9 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title" style="text-align:center">Portfolio Update Form</h3>
              <p class="card-description "> Update Portfolio Details </p>

              <form class="forms-sample" method="post" action="{{route('portfolio.update',$port->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Project Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title" value="{{$port->title}}">
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Project Description</label>
                  <div class="col-sm-9">
                    <textarea rows="3" class="form-control" id="desc" name="desc">{{$port->description}}</textarea>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Project Type</label>
                  <div class="col-sm-9">
                    <select name="type" id="type" class="form-control">
                        <option value="{{$port->type}}" selected>{{$port->type}}</option>
                        <option value="Mobile Application">Mobile Application</option>
                        <option value="Web Application">Web Application</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Application Link</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="link" name="link" value="{{$port->link}}">
                  </div>
                </div>

                <?php
                if($port->type=="Mobile Application")
                 $style="height:380px;width:200px";
                 else
                 $style="height:200px;width:250px";
                 ?>

                <p>Current Image</p>
                <img style="<?php echo $style?>" src="/images/{{$port->image}}" alt="">
                <p>Choose Image to Update</p>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Application Photo</label>
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
@endsection