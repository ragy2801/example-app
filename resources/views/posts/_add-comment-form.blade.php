@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center ">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40"  class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>
            <div class="mt-6">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" placeholder="Quick, think of something to say!"  rows="5"
                    required></textarea>
                @error('body')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-content-end mt-6 border-t border-gray-200 pt-6">
                {{-- button --}}
                <x-submit-button>
                    Post
                </x-submit-button>
            </div>
        </form>
    </x-panel>
    @else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">log in</a> to leave a comment.
    </p>
@endauth
