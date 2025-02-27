<x-app-layout>
    <h1>Formulario para crear un nuevo post</h1>
    
    <form action="{{route('posts.update', $post)}}" method="POST">

        @csrf
        @method('PUT')
        
        <label for="">
            Título:
            <input type="text" name="name" value="{{$post->name}}">
        </label>

        <br>
        <br>

        <label for="">
            Categoría:
            <input type="text" name="category" value="{{$post->category}}">
        </label>

        <br>
        <br>

        <label for="">
            Contenido:
            <textarea name="content">{{$post->content}}</textarea>
        </label>

        <br>
        <br>

        <button type="submit">Editar post</button>


    </form>

</x-app-layout>