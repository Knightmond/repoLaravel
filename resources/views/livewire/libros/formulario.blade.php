<div class="row">

    <div wire:loading wire:target="foto" class="align-items-center">
        <strong>Cargando...</strong>
        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
    </div>

    <div class="col-4">
        @if ($foto != null)
            <img style="width:230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
        @else
            <img style="width:230px;height:230px;"
            src="{{ Storage::disk("public")->url($libro->foto ? $libro->foto : "images/libros/default.png") }}" alt="">
        @endif

        <form>
            <div class="form-group">
                <label for="uploadPhoto">Subir foto</label>
                <input wire:model="foto" type="file" class="form-control-file" id="uploadPhoto">
                @error("foto") <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </form>
    </div>

    <div class="mx-auto col-6">
        <div class="form-group">
            <label>Título</label>
            <input wire:model.defer="libro.titulo" type="text" class="form-control">
            @error('libro.titulo') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Editorial</label>
            <input wire:model.defer="libro.editorial" type="text" class="form-control">
            @error('libro.editorial') <span class="text-danger">{{ $message }}</span>@enderror

        </div>


        <div class="form-group">
            <label>Autor</label>
            <input wire:model="libro.autor" type="text" class="form-control">
            @error('libro.autor') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Fecha de lanzamiento</label>
            <input wire:model.defer="libro.fecha_lanzamiento" type="text" class="form-control">
            @error('libro.fecha_lanzamiento') <span class="text-danger">{{ $message }}</span>@enderror

        </div>
    </div>



</div>
