<?php
declare(strict_types=1);
namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\AvailableCurrency;

class SlotCurrency extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.slot-currency',[
            'currencies'=>AvailableCurrency::get(),
        ]);
    }
}
