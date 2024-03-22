@extends("frontend.layouts.master")
@section("content")

<div class="py-4"></div>
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class=" col-lg-9   mb-5 mb-lg-0">
        <article>
          <div class="post-slider mb-4">
            <img src="{{asset($post->image)}}" class="card-img" alt="post-thumb">
          </div>

          <h1 class="h2">{{$post->title}}</h1>
          <ul class="card-meta my-3 list-inline">
            <li class="list-inline-item">
              <a href="author-single.html" class="card-meta-author">
                <img src="{{asset($post->user->image)}}">
                <span>{{$post->user->name}}</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>{{ceil(str_word_count($post->article)/200)}} Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>{{$post->updated_at->diffforHumans()}}</li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="tags.html">{{$post->topic}}</a></li>
              </ul>
            </li>
          </ul>
          <div class="content"><p>{{$post->article}}</p>
          </div>
        </article>  
      </div>
    </div>
  </div>
</section>

@endsection