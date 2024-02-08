<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
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
        $this->reportable(function (Throwable $e) {
            if(request()->is('api*')){
                if($exception instanceof ModelNotFoundException || 
                    ($exception instanceof NotFoundHttpException &&
                     $exception->getPrevious() &&
                    $exception->getPrevious() instanceof ModelNotFoundException))
                    return response()->json(['error'=>'Recurso no encontrado'],404);
            } else if ($exception instanceof ValidationException)
                return response()->json(['error'=>'Datos no válidos'],400);
            else if (isset($exception))
                return response()->json(['error'=>'Error: ' . $exception->getMessage()],500);
        });
    }
}
