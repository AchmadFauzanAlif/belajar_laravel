<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ( $posts as $post )
    <article class="py-2 border-b border-gray-300 ">
        <a href="/posts/{{ $post['slug'] }}">
            <h2 class="text-3xl mb-2 hover:underline font-bold">{{ $post['title'] }}</h2>
        </a>
        <div class="">
            <a href=""> {{ $post['author'] }} | 16 Maret 2025</a>
        </div>
        <p class="my-4">{{ Str::limit($post['body'], 150) }}</p>

        <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 hover:underline ">Read more &raquo;</a>
    </article >
    @endforeach

</x-layout>