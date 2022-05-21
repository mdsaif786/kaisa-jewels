<?php

namespace App\View\Components;

use App\Models\BookCategory;
use Illuminate\View\Component;

class SubHeaderMenu extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $subHeaderCategories=BookCategory::get();

        return view('components.sub-header-menu',[
            'subHeaderCategories'=>$subHeaderCategories,
        ]);
    }
}
