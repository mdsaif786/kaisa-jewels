<?php

namespace App\View\Components;

use App\Models\BookCategory;
use Illuminate\View\Component;

class CategoryHeaderMenu extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $parentCategories=BookCategory::whereNull('parent_category_id')->get();

        return view('components.category-header-menu',[
            'parentCategories'=>$parentCategories,

        ]);
    }
}
