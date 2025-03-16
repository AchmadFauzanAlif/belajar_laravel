<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-2 border-b border-gray-300 ">
        <h2 class="text-3xl mb-2 font-bold">{{ $post['title'] }}</h2>
        <div class="">
            <a href=""> {{ $post['author'] }} | 16 Maret 2025</a>
        </div>
        <p class="my-4">{{ $post['body'] }}</p>

        <a href="/posts" class="text-blue-500 hover:underline ">&laquo; Back to </a>
    </article >

</x-layout>