@extends('header')
@section('content')
<div class="container-fluid">
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row justify-content-center">
        <div class="col-9 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title" style="text-align:center">Team Update Form</h3>
              <p class="card-description "> Update Team Member Details </p>

              <form class="forms-sample" method="post" action="{{route('team.update',$team->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" value="{{$team->name}}">
                  </div>
                </div>

                <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label">Role</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="role" name="role" value="{{$team->role}}">
                  </div>
                </div>

                <p>Current Image</p>
                <img style="height:200px;width:200px" src="/images/{{$team->image}}" alt="">
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
@endsection