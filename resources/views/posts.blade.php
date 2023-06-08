<x-layout >

    @foreach ($posts as $post)
    <article>
         {{-- turn id to slug for User Friendly and use Route Model Binding --}}
        <h1><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h1>
        <p>
            <strong>{{ $post->catergory->name }}</strong>
            {{-- show category of each post --}}
        </p>
        <div>
            {{$post->excerpt}}
        </div>
    </article>
    @endforeach

</x-layout>


