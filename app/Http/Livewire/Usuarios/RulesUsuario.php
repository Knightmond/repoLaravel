<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuario
{

    public static function reglas($id = null)
    {
        return
            [
                'usuario.nombre_usuario' => 'required|string',
                'usuario.email' => 'required|email|unique:usuarios,email,'.$id,
                'usuario.password' => 'nullable|min:8',
                'confirmar_password' => 'same:usuario.password',
                'foto' => 'nullable|image'
            ];
    }
}
