<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Ini Blog</h3>

    <article class="py-11 max-w-screen-md">
            <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-900">{{ $post ['title']}}</h2>

        <div class="text-base text-gray-500">
            <a href="#">{{ $post ['title']}}</a> | {{ $post ->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post ['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts </a>
    </article>
</x-layout>