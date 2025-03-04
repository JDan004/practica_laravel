<x-app-layout>
    <ul>
        <h1>Aquí se listarán todos los posts</h1>
        <a href="{{route('posts.create')}}">Crear un nuevo post</a>
        <br>
        <br>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post->slug)}}">
                    {{ $post->name }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
</x-app-layout>
