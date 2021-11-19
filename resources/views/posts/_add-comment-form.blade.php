@auth
    <x-panel>
        <form method="Post" action="/posts/{{$post->slug}}/comments">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id()}}" alt="" width="40" height="40"
                     class="rounded-full"/>
                <h2 class="ml-4">Want to participate?</h2>
            </header>
            <div class="mt-8">
                        <textarea name="body" class="w-full text-sm" rows="5" required
                                  placeholder="Quick, things of something to say!"></textarea>
                @error('body')
                <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or
        <a href="/login" class="hover:underline">Log In</a>
        to leave a comment.
    </p>
@endauth
