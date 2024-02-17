<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (Throwable $e) {
            if (request()->is('api*')) {
                if ($e instanceof ModelNotFoundException) {
                    return response()->json(['error' => 'Elemento no encontrado'], 404);
                } else if ($e instanceof AuthenticationException) {
                    return response()->json(['error' => 'Usuario no autenticado'], 401);
                } else if ($e instanceof ValidationException) {
                    return response()->json(['error' => 'Datos inválidos'], 400);
                } else if(isset($e)) {
                    return response()->json(['error' => 'Error en la app' . $e->getMessage()], 500);
                }
            }
        });
    }

    public function render($request, Throwable $exception) {
    }
}
