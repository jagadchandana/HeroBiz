<?php

namespace App\View\Components\MemberArea\Components;

use Illuminate\View\Component;

class SiderBar extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('member-area.components.sider-bar');
    }
}
