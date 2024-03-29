@extends('backend.layouts.master')
@section('content')

<div class="col-md-12 mb-lg-0 mb-4">
  <div class="card mt-4">
    <div class="card-header pb-0 p-3">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <h6 class="mb-0">Create User</h6>
        </div>
      </div>
    </div>
    <div class="card-body p-3">
      <form action="{{route('dashboard.users.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col">
            <div class="input-group input-group-static mb-4">
              <input name="name" type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
              @error('name')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="col">
            <div>
              <label for="formFileSm" class="form-label"><small>Image</small></label>
              <input name="image" class="form-control form-control-sm" id="formFileSm" accept="image/png, image/jpeg" type="file" />
              @error('image')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="input-group input-group-dynamic mb-4">
                <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
              @error('email')
                <p class="text-danger">{{$message}}</p>
              @enderror
              </div>
            </div>
            <div class="col">
              <div class="input-group input-group-dynamic mb-4">
                <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
              @error('password')
                <p class="text-danger">{{$message}}</p>
              @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="input-group input-group-dynamic mb-4">
                <input name="mobile" type="phone" class="form-control" placeholder="Mobile" aria-label="Username" aria-describedby="basic-addon1">
              @error('mobile')
                <p class="text-danger">{{$message}}</p>
              @enderror
              </div>
            </div>
            <div class="col">
              <div class="input-group input-group-dynamic mb-4">
                <fieldset>
                  <h6>Role</h6>
                  <label><input type="radio" name="role" value="admin"> Admin</label>
                  <label><input type="radio" name="role" value="author"> Author</label>
                  @error('role')
                    <p class="text-danger">{{$message}}</p>
                  @enderror
                </fieldset>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="summary">Summary</label>
            <textarea name="summary" class="form-control" id="my-editor" cols="30" rows="10"></textarea>
              @error('summary')
                <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
        </div>
        <div class="col-6 text-left mt-4">
          <button type="submit" class="btn bg-gradient-dark mb-0"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
<!-- set top page address bar and active button  -->
@section('pageName') {{$pageName}} @endsection
