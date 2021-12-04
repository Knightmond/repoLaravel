<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width: 150px;height:150px;" class="mx-auto mt-3 card-img-top"
            src="{{ Storage::disk('public')->url($libro->foto ? $libro->foto : 'images/libros/default.png') }}" alt="Card image cap">
        <div class="text-center card-body">
            <h5 class="card-title">{{ $libro->titulo }}</h5>
            <span class="card-text">Editorial: {{ $libro->editorial }}</span><br>
            <span class="card-text">Autor: {{ $libro->autor }}</span><br>
            <small class="card-text">Fecha de lanzamiento {{ $libro->fecha_lanzamiento }}</small>
            <a href="{{ route('libros.index') }}" class="btn btn-primary d-block"><i class="fa fa-home"></i> Regresar</a>
        </div>
    </div>
</div>
