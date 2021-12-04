<div>
    <div class="mx-auto card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title">
                <h1>Eliminar libro</h1>
            </div>
            @if ($foto != null)
                <img style="width:230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
            @else
                <img style="width:230px;height:230px;"
                src="{{ Storage::disk("public")->url($libro->foto ? $libro->foto : "images/libros/default.png") }}" alt="">
            @endif
            <h5 class="card-title">{{$libro->titulo}}</h5>
            <p class="card-text">{{$libro->editorial}}</p>
            <p class="card-text">{{$libro->autor}}</p>
            <button wire:click="delete" class="btn btn-danger btn-sm">Eliminar</button>
            <a href="{{route('libros.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
      </div>
</div>
