@props(['category'])

<a href="/categories/{{ $category->slug }}"
    class="px-3 py-1 border border-blue-300 rounded-full text-xs uppercase font-semibold" style="font-size: 10px;"
    >{{ $category->name }}</a>
