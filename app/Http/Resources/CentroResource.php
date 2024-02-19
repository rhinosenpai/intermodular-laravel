<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CentroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'email' => $this->email,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'poblacion' => $this->poblacion,
            'provincia' => $this->provincia,
            'password' => $this->password,
            'usuarios' => $this->usuarios()->get()->map(function($usuario) {
                return [
                    'id' => $usuario->id,
                    'id_centro' => $usuario->id_centro,
                    'nombre' => $usuario->name,
                    'email' => $usuario->email,
                    'dni' => $usuario->dni,
                    'roles' => $usuario->roles()->pluck('tipo'),
                    'login' => $usuario->login
                ];
            })
        ];
    }
}
