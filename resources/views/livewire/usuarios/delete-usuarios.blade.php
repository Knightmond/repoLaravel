<div>
    <div class="mx-auto card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title">
                <h1>Eliminar usuario</h1>
            </div>
            @if ($foto != null)
                <img style="width:230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
            @else
                <img style="width:230px;height:230px;"
                src="{{ Storage::disk("public")->url($usuario->foto ? $usuario->foto : "images/usuarios/default.png") }}" alt="">
            @endif
            <h5 class="card-title">{{$usuario->titulo}}</h5>
            <p class="card-text">{{$usuario->editorial}}</p>
            <p class="card-text">{{$usuario->autor}}</p>
            <button wire:click="delete" class="btn btn-danger btn-sm">Eliminar</button>
            <a href="{{route('usuarios.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
    </div>
</div>
