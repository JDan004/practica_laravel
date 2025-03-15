<x-app-layout>

    <h1>Formulario para crear un nuevo post</h1>

    @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                    
                @endforeach
            </ul>
        </div>
        
    @endif
    
    <form action="{{route('posts.index')}}" method="POST">

        @csrf
        
        <label for="">
            Título:
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        <br>
        <br>

        <label for="">
            Categoría:
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        <br>
        <br>

        <label for="">
            Slug:
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>

        <br>
        <br>

        <label for="">
            Contenido:
            <textarea name="content">{{old('content')}}</textarea>
        </label>

        <br>
        <br>

        <button type="submit">Crear nuevo post</button>


    </form>



</x-app-layout>