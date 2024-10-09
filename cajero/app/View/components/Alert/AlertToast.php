<?php

namespace App\View\Components\Alert;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertToast extends Component
{

    public $mensaje;
    public $tipo;

    /**
     * Create a new component instance.
     */
    public function __construct($mensaje, $tipo = 'success')
    {
        $this->mensaje = $mensaje;
        $this->tipo = $tipo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert.alert-toast');
    }
}
