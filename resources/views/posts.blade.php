<x-layout>
@include('_post-header')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
              @if($posts->count())
 <x-posts-grid :posts="$posts"></x-posts-grid>
            @else
            <h1 class="text-center">There is no posts</h1>
            @endif

          
        </main>

</x-layout>