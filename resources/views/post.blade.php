@extends('layout')
<body>

<!-- <h1>Hello World !!</h1> -->
@section('content')
<article>
<h1>
{!! $post->title!!}</h1>
<div>{!!$post->body!!}</div>
<a href="/">GO Home!</a>
</article>
@endsection