<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       /*     $nombre = 'JUAN CARLOS GIRALDO BERNAL';
            function getIniciales($nombre){
                $name = '';
                $explode = explode(' ',$nombre);
                foreach($explode as $x){
                    $name .=  $x[0];
                }
                return $name;
            }

            echo getIniciales($nombre);*/

           $empresa = \Modules\Empresa\Entities\Empresa::find(\Auth::user()->empresa_id);
           $fecha_actual = date('d-m-Y');
           $fecha_expiracion = date("d-m-Y",strtotime($empresa->fecha_registro."+ 7 days"));

           if (\Auth::user()->hasRole('Administrador')) {

              return view('home');
           }
           else
            {
               if ($fecha_actual == $fecha_expiracion ) {

                 \Auth::logout();
                 \Alert::alert('¡Lo siento!', 'Ya has pasado el límite de días de prueba.', 'error');
                 return redirect('/login');
             }
             else
             {
                return view('home');
             }

           }


    }
}
