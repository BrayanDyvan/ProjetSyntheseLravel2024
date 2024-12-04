<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,...$roles): Response
    {
          // Vérifier si l'utilisateur est authentifié
          if (!Auth::check()) {
              return redirect()->route('showLoginForm'); // Rediriger vers la page de connexion
            }
            // Vérifier si l'utilisateur a le rôle spécifié
            $user = Auth::user();
            if (!in_array($user->role, $roles)) {
              abort(403, 'Accès interdit.'); 
            }
          return $next($request);
        
    }
}
