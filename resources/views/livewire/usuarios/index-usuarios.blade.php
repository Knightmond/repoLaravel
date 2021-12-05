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
                <a href="{{ route('usuarios.create') }}" type="button" class="btn-sm btn btn-success"><i
                        class="fa fa-plus-circle"></i> Crear nuevo</a>
            </div>
        </div>
    </div>

    @if (count($usuarios) > 0)
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th>Foto</th>
                <th scope="col">Nombre del usuario</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{$usuario->id}}</th>
                        <th>
                            <img style="border-radius:35px;width: 35px;height:35px;"
                                src="{{Storage::disk("public")->url($usuario->foto ? $usuario->foto : 'images/usuarios/default.png') }}" alt="">
                        </th>
                        <td>{{$usuario->nombre_usuario}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>
                            <a href="{{ route('usuarios.mostrar', $usuario) }}" title="Mostrar más"
                                class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('usuarios.edit', $usuario) }}" title="Editar perfil"
                                class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('usuarios.delete', $usuario) }}" title="Eliminar perfil seleccionado más"
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
    {{ $cargado == true ? $usuarios->links() : null }}

</div> <!-- No quitar -->

