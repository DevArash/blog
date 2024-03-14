@extends("backend.layouts.master")
@section("content")

<div class="col-md-12 mb-lg-0 mb-4">
  <div class="card mt-4">
    <div class="card-header pb-0 p-3">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <h6 class="mb-0">Settings</h6>
        </div>
      </div>
    </div>
    <div class="card-body p-3">
      <form action="{{route('dashboard.settings.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col">
            <div>
              <label for="formFileSm" class="form-label"><small>{{$settings->logo}}</small></label>
              <input name="logo" class="form-control form-control-sm" id="formFileSm" accept="image/png, image/jpeg" type="file" />
              @error('logo')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="col">
            <div class="input-group input-group-dynamic mb-4">
                <input name="brandName" type="text" class="form-control" placeholder="Brand Name" value="{{$settings->brandName}}" aria-label="Username" aria-describedby="basic-addon1">
              @error('brandName')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="input-group input-group-dynamic mb-4">
                <input name="mainTitle" type="text" class="form-control" placeholder="Main Title" value="{{$settings->mainTitle}}" aria-label="Username" aria-describedby="basic-addon1">
              @error('mainTitle')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="col">
            <div class="input-group input-group-dynamic mb-4">
                <input name="facebook" type="text" class="form-control" placeholder="Facebook Address" value="{{$settings->facebook}}" aria-label="Username" aria-describedby="basic-addon1">
              @error('facebook')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="input-group input-group-dynamic mb-4">
                <input name="twitter" type="text" class="form-control" placeholder="Twitter Address" value="{{$settings->twitter}}" aria-label="Username" aria-describedby="basic-addon1">
              @error('twitter')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="col">
            <div class="input-group input-group-dynamic mb-4">
                <input name="linkedin" type="text" class="form-control" placeholder="Linkedin Address" value="{{$settings->linkedin}}" aria-label="Username" aria-describedby="basic-addon1">
              @error('linkedin')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="input-group input-group-dynamic mb-4">
                <input name="youtube" type="text" class="form-control" placeholder="Youtube Address" value="{{$settings->youtube}}" aria-label="Username" aria-describedby="basic-addon1">
              @error('youtube')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="col"></div>
        </div>
        <div class="col-6 text-left mt-4">
          <button type="submit" class="btn bg-gradient-dark mb-0"><i class="material-icons text-sm">update</i>&nbsp;&nbsp;Update</button>
        </div>
      </form>
    </div>
  </div>
</div>




@endsection
<!-- set top page address bar  -->
@section('pageName') {{$pageName}} @endsection