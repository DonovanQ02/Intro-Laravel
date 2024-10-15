
<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    //$ para definir una variable
  public $encabezado;
  public $titulo;
  public $textoBoton;

    public function __construct($encabezado, $titulo, $textoBoton)
    {
        $this -> encabezado = $encabezado;
        $this -> titulo = $titulo;
        $this -> textoBoton = $textoBoton;

    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}

