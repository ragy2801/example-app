<x-layout>
    @include('posts._header')

    <main class="mx-w-6xl mx-auto mt-6 lg:mt-20 space-y-8">
        @if($posts->count())
            <x-posts-grid :posts="$posts" />
            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
