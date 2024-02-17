<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
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
            'login' => $this->login,
            'name' => $this->name,
            'dni' => $this->dni,
            'roles' => $this->roles()->pluck('tipo'),
            'email' => $this->email,
<<<<<<< HEAD
            'centro' => $this->centro()->get(),
            'empresa' => $this->empresa()->get()
=======
>>>>>>> 30f95c7b06e529678c66f70ff8f372bd5c6efc6c
        ];
    }
}
