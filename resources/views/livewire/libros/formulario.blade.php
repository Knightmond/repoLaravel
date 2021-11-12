<div class="row">
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
