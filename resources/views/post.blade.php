<x-layout>
    {{-- you have  to warp all of your code in x-slot and name it as your variable in layout --}}
  {{-- <x-slot name="content">
    <article>
        <h1>{{ $post->title }}</h1>
        <div>
            {{ $post->body }}
        </div>
        <a href="/">Go Back</a>
    </article>
  </x-slot> --}}
   {{-- or you can just put your code without x-slot and use $slot in layout --}}
   <article>
    <h1>{{ $post->title }}</h1>
    <p>
    <a href="/categories/{{$post->catergory->slug}}">{{$post->catergory->name}}</a>
    </p>
    <div>
        {{ $post->body }}
    </div>
    <a href="/">Go Back</a>
</article>
</x-layout>

