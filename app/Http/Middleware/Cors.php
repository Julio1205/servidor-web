<?php
namespace App\Http\Middleware;
use Closure;
class Cors
{
  public function handle($request, Closure $next)
  {
    return $next($request)
       //Url a la que se le dará acceso en las peticiones
      ->header("Access-Control-Allow-Origin", "http://urlfronted.example")
      //Métodos que a los que se da acceso
      ->header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE")
      //Headers de la petición
      ->header("Access-Control-Allow-Headers", "X-Requested-With, Content-Type, X-Token-Auth, Authorization"); 
  }
<<<<<<< HEAD
}
=======
}
>>>>>>> dbc0cd3184d6dc07709ca7f7378c33c65689c306
