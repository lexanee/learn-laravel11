<x-layout>
    <x-slot:title>Post</x-slot:title>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-3 text-3xl font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | {{ $post['publish_date'] }}
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/blog" class="hover:underline transition-all">&laquo; Back to all Posts</a>
    </article>
</x-layout>
