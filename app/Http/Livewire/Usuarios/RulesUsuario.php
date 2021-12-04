<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuario
{

    public static function Reglas()
    {
        return
            [
                'usuario.nombre_usuario' => 'required|string',
                'usuario.email' => 'required|email',
                'usuario.password' => 'required|string',
                'foto' => 'nullable|image'
            ];
    }
}
