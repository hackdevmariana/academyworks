<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\AcademyName;
use App\Models\Menu;
use App\Models\MenuItem;

class AcademyColumnFooter extends Component
{
    public $academy;
    public $menuItems;

    public function __construct()
    {
        $this->academy = AcademyName::first();
        $userLocale = app()->getLocale();
        $menu = Menu::where('slug', 'main-menu')->where('locale', $userLocale)->first();

        $this->menuItems = $menu ? MenuItem::where('menu_id', $menu->id)
            ->whereNull('parent_id')
            ->where('is_active', 1)
            ->orderBy('order', 'asc')
            ->get() : [];
    }

    public function render()
    {
        return view('components.academy-column-footer');
    }
}
