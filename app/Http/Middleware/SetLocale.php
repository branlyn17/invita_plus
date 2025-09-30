<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Lista de locales soportados por tu aplicación
        $available = ['en', 'es'];

        // 1) Si ya hay un locale en sesión y es válido, lo usamos
        if (Session::has('locale') && in_array(Session::get('locale'), $available, true)) {
            $locale = Session::get('locale');
        } else {
            // 2) Intentamos detectar el idioma del navegador entre los soportados
            $detected = $request->getPreferredLanguage($available);

            // 3) Normalizamos y validamos el resultado
            // Si getPreferredLanguage devuelve null por alguna razón, usamos fallback
            if ($detected && in_array($detected, $available, true)) {
                $locale = $detected;
            } else {
                // 4) Fallback seguro: usar el locale por defecto de la app
                $locale = config('app.locale', 'en');
            }

            // 5) Guardamos la elección en sesión para futuras peticiones
            Session::put('locale', $locale);
        }

        // 6) Aplicamos el locale a la aplicación (traducciones, Carbon::locale si lo configuras)
        App::setLocale($locale);

        // 7) Seguir con la petición
        return $next($request);
    }
}
