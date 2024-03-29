@extends("backend.layouts.master")
@section("content")

<div class="col-md-12 mb-lg-0 mb-4">
  <div class="card mt-4">
    <div class="card-header pb-0 p-3">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <h6 class="mb-0">About</h6>
        </div>
      </div>
    </div>
    <div class="card-body p-3">
      <form action="{{route('dashboard.about.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col">
          </div>
            <div>
              <label for="formFileSm" class="form-label"><small>{{$about->image}}</small></label>
              <input name="image" class="form-control form-control-sm" id="formFileSm" accept="image/png, image/jpeg" type="file" />
              @error('image')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>
          <div class="row">
            <div class="col">
              <div class="input-group input-group-dynamic mb-4">
                <input name="title" type="text" class="form-control" value="{{$about->title}}" aria-label="Username" aria-describedby="basic-addon1">
              @error('title')
                <p class="text-danger">{{$message}}</p>
              @enderror
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="article">Article</label>
            <textarea name="article" class="form-control" id="my-editor" cols="30" rows="10">{{$about->article}}</textarea>
              @error('article')
                <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
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
