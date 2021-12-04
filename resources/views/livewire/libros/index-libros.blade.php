<div wire:init="cargando"> <!-- No quitar -->

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3 input-group">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>


        </div>

        <div class="col-md-8">
            <div class="float-right mb-2">
                <a href="{{ route('libros.create') }}" type="button" class="btn-sm btn btn-success"><i
                        class="fa fa-plus-circle"></i> Crear nuevo</a>
            </div>
        </div>
    </div>

    @if (count($libros) > 0)
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th>Imagen</th>
                <th scope="col">Título</th>
                <th scope="col">Editorial</th>
                <th scope="col">Autor</th>
                <th scope="col">Fecha de lanzamiento</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <th scope="row">{{$libro->id}}</th>
                        <th>
                            <img style="width: 40px;height:40px;"
                                src="{{Storage::disk("public")->url($libro->foto ? $libro->foto : 'images/libros/default.png') }}" alt="">
                        </th>
                        <td>{{$libro->titulo}}</td>
                        <td>{{$libro->editorial}}</td>
                        <td>{{$libro->autor}}</td>
                        <td>{{$libro->fecha_lanzamiento}}</td>
                        <td>
                            <a href="{{ route('libros.mostrar', $libro) }}" title="Mostrar más"
                                class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('libros.edit', $libro) }}" title="Editar curso"
                                class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('libros.delete', $libro) }}" title="Eliminar curso seleccionado más"
                                class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <img class="mx-auto d-block" style="margin-top:4rem;width: 200px;height:200px;"
            src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">
    @endif

    {{ $cargado == true ? $libros->links() : null }}
</div> <!-- No quitar -->
