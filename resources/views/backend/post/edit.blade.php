@extends("backend.layouts.master")
@section("content")

<div class="col-md-12 mb-lg-0 mb-4">
  <div class="card mt-4">
    <div class="card-header pb-0 p-3">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <h6 class="mb-0">Edit Post</h6>
        </div>
      </div>
    </div>
    <div class="card-body p-3">
      <form action="{{route('dashboard.post.update',[$post->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="row">
          <div class="col">
            <div class="input-group input-group-static mb-4">
              <select name="topic" class="form-control" id="exampleFormControlSelect1">
                <option>{{$post->topic}}</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div>
              <label for="formFileSm" class="form-label"><small>{{$post->image}}</small></label>
              <input name="image" class="form-control form-control-sm" id="formFileSm" type="file" accept="image/png, image/jpeg"/>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="input-group input-group-dynamic mb-4">
                <input name="title" type="text" class="form-control" placeholder='title' value={{$post->title}} aria-label="Username" aria-describedby="basic-addon1">
                @error('title')
                  <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="description">Article</label>
            <textarea name="article" class="form-control" id="my-editor" cols="30" rows="10">{{$post->article}}</textarea>
            @error('article')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
        </div>
        <div class="col-6 text-left mt-4">
          <button type="submit" class="btn bg-gradient-faded-success mb-0" style="color: white;"><i class="material-icons text-sm">edit</i>&nbsp;&nbsp;Edit</button>
          <a class="btn bg-gradient-faded-danger mb-0" href="{{route('dashboard.post.delete',[$post->id])}}" style="color: white;"><i class="material-icons text-sm">delete</i>&nbsp;&nbsp;Delete</a>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection
<!-- set top page address bar  -->
@section('pageName') {{ "Post / " . $pageName}} @endsection
