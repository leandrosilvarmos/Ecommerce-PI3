<?php

namespace App\Http\Middleware;

use App\categoria;
use Closure;

class VerifyCategoriesCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(categoria::all()->count() == 0){
            session()->flash('error' , 'Precisa criar uma categorias, antes de criar o produto');
            return redirect(route('categorias.create'));
        }

        return $next($request);
    }
}
