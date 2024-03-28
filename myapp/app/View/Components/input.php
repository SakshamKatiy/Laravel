<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $type;
    public $label;
    public $name;
    public $demo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    //php artisan make:model model_name --migration
    public function __construct($type,$label,$name,$demo=0)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->demo = $demo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
