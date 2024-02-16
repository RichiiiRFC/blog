@extends('plantilla')
@section('titulo', 'Listado Posts')
@section('contenido')
<h1>Listado Posts</h1>
<table class="table">
<tr>
   
        <th>Post</th>
        <th>Usuario</th>
        <th></th>

</tr>
<tr>
        @foreach($posts as $post)
            <td>{{ $post-> titulo}}</td>
            <td>{{ $post->usuario->login}}</td>
            <td><a class="btn btn-primary" href="{{ route('posts.show', $post) }}">VER</a></td>
            <td>
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                
                        <button class="btn btn-primary">Borrar</button>
</form>



            </td>
            </tr>
        @endforeach
        


</table>
{{ $posts->links() }}


        
    

@endsection

