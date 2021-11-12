<div> <!-- No quitar -->
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Título</th>
        <th scope="col">Editorial</th>
        <th scope="col">Autor</th>
        <th scope="col">Fecha de lanzamiento</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($libros as $libro)
            <tr>
                <th scope="row">{{$libro->id}}</th>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->editorial}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->fecha_lanzamiento}}</td>
                <td>
                    <a href="{{ route('libros.edit', $libro) }}" title="Editar curso"
                        class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('libros.delete', $libro) }}" title="Eliminar curso seleccionado más"
                        class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>

    {{$libros->links()}}
</div> <!-- No quitar -->
