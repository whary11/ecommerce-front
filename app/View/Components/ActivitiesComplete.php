<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActivitiesComplete extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $productName;
    public function __construct($productName)
    {
        $this->productNaame = $productName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.activities-complete');
    }
}
