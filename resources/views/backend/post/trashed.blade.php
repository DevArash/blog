@extends("backend.layouts.master")
@section("content")

        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Posts</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Topic</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated At</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{asset($post->user->image)}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$post->user->name}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$post->user->email}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$post->topic}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold mb-0">{{$post->title}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$post->updated_at}}</span>
                      </td>
                      <td class="align-middle">
                        <small data-bs-toggle="tooltip" data-bs-placement="top" title="Restore Post"><a href="{{route('dashboard.post.trashed.restore', [$post->id, $post->title])}}" class="badge badge-sm bg-gradient-success"><i class="material-symbols-outlined opacity-10">restore_from_trash</i></a></small>
                        <small data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Post"><a href="{{route('dashboard.post.trashed.destroy', [$post->id])}}" class="badge badge-sm bg-gradient-danger"><i class="material-symbols-outlined opacity-10">delete_forever</i></a></small>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div>
            {{$posts->links()}}
          </div>
        </div>

@endsection
<!-- set top page address bar and active button  -->
@section('pageName') {{$pageName}} @endsection