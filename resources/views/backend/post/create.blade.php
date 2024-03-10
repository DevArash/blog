@extends("backend.layouts.master")
@section("content")

<div class="col-md-12 mb-lg-0 mb-4">
  <div class="card mt-4">
    <div class="card-header pb-0 p-3">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <h6 class="mb-0">Create Post</h6>
        </div>
      </div>
    </div>
    <div class="card-body p-3">
      <form>
        <div class="row">
          <div class="col">
            <div class="input-group input-group-static mb-4">
              <select class="form-control" id="exampleFormControlSelect1">
                <option>select topic</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="input-group input-group-static mb-4">
              <select class="form-control" id="exampleFormControlSelect1">
                <option>select author</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="input-group input-group-dynamic mb-4">
                <input type="text" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="col">
              <div>
                <label for="formFileSm" class="form-label"><small>Image</small></label>
                <input class="form-control form-control-sm" id="formFileSm" type="file" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="description">Article</label>
            <textarea name="description" class="form-control" id="my-editor" placeholder="Enter post description" cols="30" rows="10"></textarea>
          </div>
        </div>
      </form>
      <div class="col-6 text-left mt-4">
        <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Save</a>
      </div>
    </div>
  </div>
</div>


@endsection
<!-- set top page address bar  -->
@section('pageName') {{$pageName}} @endsection
