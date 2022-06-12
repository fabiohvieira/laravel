<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $linhas;

    /**
     * Create a new component instance.
     * 
     * @param  string  $data
     * @return void
     */
    public function __construct($linhas)
    {
        $this->linhas = $linhas;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
