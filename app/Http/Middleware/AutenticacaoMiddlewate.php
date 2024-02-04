<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddlewate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user && $user->role == 'diretor') {
            // Diretor autenticado, permite o acesso à área do diretor
            return $next($request);
        } elseif ($user && $user->role == 'fornecedor') {
            // Fornecedor autenticado, permite o acesso à área do fornecedor
            return $next($request);
        } else {
            // Usuário não autenticado ou com papel inválido, nega o acesso
            return Response('Acesso negado. Rota precisa de autenticação.');
        }
    }
}
