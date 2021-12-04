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
            src="{{ Storage::disk("public")->url($usuario->foto ? $usuario->foto : "images/usuarios/default.png") }}" alt="">
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
            <label>Nombre de usuario</label>
            <input wire:model.defer="usuario.nombre_usuario" type="text" class="form-control">
            @error('usuario.nombre_usuario') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Correo electrónico</label>
            <input wire:model.defer="usuario.email" type="email" class="form-control">
            @error('usuario.email') <span class="text-danger">{{ $message }}</span>@enderror

        </div>

        <div class="form-group">
            <label>Contraseña</label>
            <input wire:model="usuario.password" type="password" class="form-control">
            @error('usuario.password') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Confirmar contraseña</label>
            <input wire:model.defer="libro.fecha_lanzamiento" type="password" class="form-control">
            @error('libro.fecha_lanzamiento') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>

</div>
