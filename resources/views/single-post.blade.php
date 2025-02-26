<x-layout>
    <x-slot:title>Article</x-slot:title>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-3 text-3xl font-bold text-gray-900">{{ $article->title }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $article->author->id }}">{{ $article->author->name }}</a> |
            {{ $article->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">
            {{ $article->content }}
        </p>
        <a href="/blog" class="hover:underline transition-all">&laquo; Back to all Posts</a>
    </article>
</x-layout>
