@section('content') 
<!-- <h1>Hello World !!</h1> -->

<!-- @foreach($posts as $post)
<article>

<h1>
    
<a href="/posts/{{$post->slug}}">

{{$post->title}}
<p></p>
</a>
<br>
<p>
By <a href="/authers/{{$post->auther->username}}">{{$post->auther->name}}</a> in <a href="/categories/{{$post->category->slug}}">{!!$post->Category->name!!}</a>
</p>

</h1>
<div>

{!! $post->excerpt !!}
</div>
</article>

@endforeach
@endsection -->

<x-layout>
@include('_post-header')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
     <x-post-featured-card :post="$posts[0]" ></x-post-featured-card>
            <!-- <div class="lg:grid lg:grid-cols-2">
            <x-post-card></x-post-card>
            <x-post-card></x-post-card>
               

              
            </div>

            <div class="lg:grid lg:grid-cols-3">
                

                   <x-post-card></x-post-card>
                   <x-post-card></x-post-card>
                   <x-post-card></x-post-card>
            </div> -->
        </main>

</x-layout>