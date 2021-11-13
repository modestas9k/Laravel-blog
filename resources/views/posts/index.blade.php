<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
        
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif


    </main>


{{-- @section('content')
    @foreach ($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a>
        </h1>
        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->username}}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
          </p>
        <div>
            <p>
                {!! $post->exerpt !!}
            </p>
        </div>
    </article>
    @endforeach --}}
</x-layout>