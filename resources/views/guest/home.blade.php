@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="jumbo col-xs-12">
      <img src="{{asset('img/sea.jpg')}}" alt="">
    </div>
  </div>
</div>

    {{-- <h1 class="text-center">HOMEPAGE</h1>
    @foreach ($posts as $post)
      <h2>{{$post->title}}</h2>
      <p>{{$post->content}}</p>
      <img src="{{asset('storage/'.$post->image_url)}}" alt="">
    @endforeach --}}
@endsection



{{-- #attributes: array:6 [▼
    "id" => 1
    "title" => "Accusantium"
    "content" => "Aspernatur eveniet dignissimos quis ducimus aspernatur quo. Aut exercitationem rerum voluptatibus laborum autem vitae qui autem. Esse commodi qui odit beatae qu ▶"
    "slug" => "accusantium-eum-est"
    "created_at" => "2021-05-28 15:33:56"
    "updated_at" => "2021-05-28 19:42:55"
  ] --}}