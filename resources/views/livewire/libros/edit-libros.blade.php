<div>
    <form wire:submit.prevent="editar">
        <div class="card">
            <div class="card-header">
                Modificar libro
            </div>
            <div class="card-body">
                @include('livewire.libros.formulario')
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-primary btn-sm">
                    <i class="fa fa-iedit"></i> Modificar</button>
                <a href="{{ route('libros.index') }}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
