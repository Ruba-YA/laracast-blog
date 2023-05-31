@extends('layout')
<body>

<!-- <h1>Hello World !!</h1> -->
@section('content')
<article>
<h1>
{!! $post->title!!}</h1>

<p>
By <a href="/authers/{{$post->auther->username}}">{{$post->auther->name}}</a> in <a href="/categories/{{$post->category->slug}}">{!!$post->Category->name!!}</a>
</p>

<div>{!!$post->body!!}</div>
<a href="/">GO Home!</a>
</article>
@endsection