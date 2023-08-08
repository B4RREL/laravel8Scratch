<x-layout >

    @include("posts._header")

     {{-- @foreach ($posts as $post) --}}
     {{-- <article>
         {{-- turn id to slug for User Friendly and use Route Model Binding --}}
        {{-- <h1><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h1> --}}
        {{-- <p>
            by <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->catergory->slug}}">{{$post->catergory->name}}</a>
            </p>
        <div> --}}
            {{-- {{$post->excerpt}} --}}
        {{-- </div>
    </article> --}}
    {{-- @endforeach --}}

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
@if ($posts->count())

        <x-posts-grid :posts="$posts"/>

        {{ $posts->links() }}

@else
        <div class="text-center">No posts yet. Please Check Back later</div>
@endif
    </main>

</x-layout>


