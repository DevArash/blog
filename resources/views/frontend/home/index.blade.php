@extends("frontend.layouts.master")
@section("content")

<!-- start of banner -->
<div class="banner text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto">
        <h1 class="mb-5">{{$settings->mainTitle}}</h1>
        <ul class="list-inline widget-list-inline">
          <li class="list-inline-item"><a href="tags.html">all</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- end of banner -->

<section class="section-sm">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8  mb-5 mb-lg-0">
  <h2 class="h5 section-title">Recent Post</h2>
  
  @foreach($posts as $post)
  <article class="card mb-4">
    <div>
        <img src="{{$post->image}}" class="card-img-top" alt="post-thumb">
    </div>
    <div class="card-body">
        <h3 class="mb-3"><a class="post-title" href="post-elements.html">{{$post->title}}</a></h3>
        <ul class="card-meta list-inline">
        <li class="list-inline-item">
            <a href="author-single.html" class="card-meta-author">
            <img src="{{asset($post->user->image)}}" alt="profile image">
            <span>{{$post->user->name}}</span>
            </a>
        </li>
        <li class="list-inline-item">
            <i class="ti-timer"></i>{{ceil(str_word_count($post->article)/200)}} Min To Read
        </li>
        <li class="list-inline-item">
            <i class="ti-calendar"></i>{{$post->updated_at->diffforHumans()}}
        </li>
        <li class="list-inline-item">
            <ul class="card-meta-tag list-inline">
              <li class="list-inline-item"><a href="tags.html">{{$post->topic}}</a></li>
            </ul>
        </li>
        </ul>
        <p>{{$post->article}}</p>
        <a href="{{route('home.post',[$post->id])}}" class="btn btn-outline-primary">Read More</a>
    </div>
  </article>
  @endforeach


  
  <ul class="pagination justify-content-center">
  {{$posts->links()}}
  </ul>
  <!-- <ul class="pagination justify-content-center">
      <li class="page-item page-item active ">
          <a href="#!" class="page-link">1</a>
      </li>
      <li class="page-item">
          <a href="#!" class="page-link">2</a>
      </li>
      <li class="page-item">
          <a href="#!" class="page-link">&raquo;</a>
      </li>
    </ul> -->

</section>

<footer class="footer">
  <svg class="footer-border" height="214" viewBox="0 0 2204 214" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2203 213C2136.58 157.994 1942.77 -33.1996 1633.1 53.0486C1414.13 114.038 1200.92 188.208 967.765 118.127C820.12 73.7483 263.977 -143.754 0.999958 158.899"
      stroke-width="2" />
  </svg>

  @endsection