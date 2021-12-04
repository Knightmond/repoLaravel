<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuario
{

    public static function reglas()
    {
        return
            [
                'usuario.nombre_usuario' => 'required|string',
                'usuario.email' => 'required|email|unique:usuario.email',
                'usuario.password' => 'nullable|min:8',
                'verPassword' => 'same:usuario.password',
                'foto' => 'nullable|image'
            ];
    }
}
