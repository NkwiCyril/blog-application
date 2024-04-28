@extends('index')
@vite('resources/css/app.css')

@section('content')
@if ($posts->count())
  <ul class="text-decoration-none space-y-10">
    @foreach ($posts as $post )
    <li>
      <div class="space-y-5 prose text-justify max-w-5xl">
        <h2 class="not-prose">
          <a class=" hover:text-indigo-700 transition-colors duration-100
          " href="/posts/{{$post->slug}}">{{$post->title}}</a>
        </h2>
        <p>{{$post->excerpt}}</p>
        <p class="text-sm">Posted {{$post->date->diffForHumans()}} by {{$post->author}}</p>
      </div>
    </li>

    @endforeach
  </ul>
  @else
  <h1>No blogs available at the moment</h1>
  @endif

@endsection