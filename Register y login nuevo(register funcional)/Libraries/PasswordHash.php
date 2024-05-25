<?php

namespace App\Libraries;

class PasswordHash
{
    /**
     * Genera el hash de una contraseña.
     *
     * @param string $password La contraseña sin hash.
     * @return string|null El hash de la contraseña o null si no se pudo generar el hash.
     */
    public static function hash($password)
    {
        // Genera el hash de la contraseña utilizando el algoritmo bcrypt
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Verifica si se generó correctamente el hash
        if ($hashedPassword === false) {
            return null; // Retorna null si no se pudo generar el hash
        }

        return $hashedPassword;
    }
}
