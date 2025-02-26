<x-layout>
    <x-slot:title>Blog</x-slot:title>
    <div class="flex flex-col gap-10 md:flex-row md:flex-wrap">
        @foreach ($articles as $article)
            <article
                class="w-full md:w-[calc((100%_-_5rem)/3)] py-8 border border-gray-300 rounded-lg p-6 transition-all duration-300 hover:shadow-lg">
                <a href="/blog/{{ $article->slug }}" ">
                    <h2 class="mb-3 text-3xl font-bold text-gray-900">{{ $article->title }}</h2>
                </a>
                <div class="text-base text-gray-500">
                    <a href="/authors/{{ $article->author->id }}" class="hover:underline">{{ $article->author->name }}</a> | {{ $article->created_at->diffForHumans() }}
                </div>
                <p class="my-4 font-light">
                    {{ Str::limit($article->content, 150) }}
                    </p>
                    <a href="/blog/{{ $article->slug }}" class="hover:underline transition-all">Read More &raquo;</a>
            </article>
 @endforeach
    </div>
</x-layout>
