<div>
    <div class="mx-auto card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title">
                <h2 align="center">Eliminar usuario</h2>
            </div>
            @if ($foto != null)
                <img style="width:230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
            @else
                <img style="border-radius:230px; width:230px;height:230px;"
                src="{{ Storage::disk("public")->url($usuario->foto ? $usuario->foto : "images/usuarios/default.png") }}" alt="">
            @endif
            <h5 class="card-title">{{$usuario->nombre_usuario}}</h5>
            <p class="card-text">{{$usuario->email}}</p>
            <button wire:click="delete" class="btn btn-danger btn-sm">Eliminar</button>
            <a href="{{route('usuarios.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
    </div>
</div>
