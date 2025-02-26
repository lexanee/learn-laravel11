<x-layout>
    <x-slot:title>Blog</x-slot:title>
    <div class="flex flex-col gap-10 md:flex-row md:flex-wrap">
        @foreach ($articles as $article)
            <article
                class="w-full md:w-[calc((100%_-_5rem)/3)] py-8 border border-gray-300 rounded-lg p-6 transition-all duration-300 hover:shadow-lg">
                <p class="text-sm text-gray-500 mb-2">
                    {{ $article->created_at->diffForHumans() }}
                </p>
                <a href="/blog/{{ $article->slug }}" ">
                    <h2 class="mb-3 text-3xl font-bold text-gray-900">{{ $article->title }}</h2>
                </a>
                <div class="text-base text-gray-500">
                    By <a href="/authors/{{ $article->author->username }}" class="hover:underline text-gray-900">{{ $article->author->name }}</a> in <a href="/categories/{{ $article->category->slug }}" class="hover:underline text-gray-900">{{ $article->category->name }}</a>
                </div>
                <p class="my-4 font-light">
                    {{ Str::limit($article->content, 150) }}
                    </p>
                    <a href="/blog/{{ $article->slug }}" class="hover:underline transition-all">Read More &raquo;</a>
            </article>
 @endforeach
    </div>
</x-layout>
