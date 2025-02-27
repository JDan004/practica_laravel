<x-app-layout>
    
    <a href="{{route('posts.index')}}">Volver al inicio</a>

        <h1>Título: {{$post->name}}</h1>
        <p>
            <b>
                Categoría: {{$post->category}}
            </b>
        </p>

        <p>
            {{$post->content}}
        </p>

        <a href="{{route('posts.edit', $post)}}">Editar post</a>

        <form action="{{route('posts.destroy', $post)}}" method="POST">

            @csrf
            @method('DELETE')

            <br>
            <button type="submit">Eliminar post</button>
        </form>


</x-app-layout>