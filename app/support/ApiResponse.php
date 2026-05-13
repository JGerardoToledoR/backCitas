<?php

namespace App\Support;

use Illuminate\Support\Carbon;

class ApiResponse
{
    /**
     * Genera una respuesta estandarizada de API.
     * * @param int $status Código HTTP (200, 400, etc.)
     * @param string $message Mensaje para el usuario o desarrollador
     * @param mixed $payload Datos (para éxito) o Errores (para fallos)
     * @return array
     */

    public static function send(

        string $message = 'Success',
        mixed $payload = null,
        int $status = 200
    ): array {
        // Determinamos si es éxito basado en el código de estado (rango 200-299)
        $isSuccess = $status >= 200 && $status < 300;

        return [
            'status' => $status,
            'success' => $isSuccess,
            'message' => $message,
            // Si es éxito, el payload va en 'data'; si no, va en 'errors'
            'data' => $isSuccess ? $payload : null,
            'errors' => !$isSuccess ? $payload : null,
            'timestamp' => Carbon::now()->toIso8601String(),
        ];
    }
}