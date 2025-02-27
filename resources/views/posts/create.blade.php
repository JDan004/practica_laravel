<x-app-layout>

    <h1>Formulario para crear un nuevo post</h1>
    
    <form action="{{route('posts.index')}}" method="POST">

        @csrf
        
        <label for="">
            Título:
            <input type="text" name="name">
        </label>

        <br>
        <br>

        <label for="">
            Categoría:
            <input type="text" name="category">
        </label>

        <br>
        <br>

        <label for="">
            Contenido:
            <textarea name="content"></textarea>
        </label>

        <br>
        <br>

        <button type="submit">Crear nuevo post</button>


    </form>



</x-app-layout>