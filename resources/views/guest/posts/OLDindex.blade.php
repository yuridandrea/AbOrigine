@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>All post</h1>
          <ul>
            @foreach ($posts as $post)
              <li>
                {{-- <a href="{{route('posts.show', ['slug' => $post->slug])}}"> --}}
                {{$post->title}}</a>
              </li>                
            @endforeach
          </ul>
        </div>
      </div>
    </div>
@endsection