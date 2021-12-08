<div>
    <div class="row">
        <div class="mx-auto col-md-5">
            <form wire:submit.prevent="login">
                <div class="form-group">
                    <label>Correo electrónico</label>
                    <input wire:model="email" type="email" class="form-control" placeholder="example@gmail.com">
                    @error("email") <b class="text-danger">{{$message}}</b> @enderror
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input wire:model="password" type="password" class="form-control" placeholder="********">
                    @error("password") <b class="text-danger">{{$message}}</b> @enderror
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label">Recuérdame</label>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>
        </div>
    </div>
</div>
