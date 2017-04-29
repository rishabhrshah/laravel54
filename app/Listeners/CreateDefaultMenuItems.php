<?php

namespace App\Listeners;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Events\CompanyRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateDefaultMenuItems
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CompanyRegistered  $event
     * @return void
     */
    public function handle(CompanyRegistered $event)
    {
        $company = $event->company;

        $menu = new Menu();
        $menu->company_id = $company->id;
        $menu->name = 'Sidebar';
        $menu->save();

        $defaultMenuItems = config('defaultmenuitems');
        foreach($defaultMenuItems as $mainMenuItem) {
            $menuItem = new MenuItem;
            $menuItem->menu_id = $menu->id;
            $this->createMenu($menuItem, $mainMenuItem, null);
            $menuItem->save();
            if(isset($mainMenuItem['children']) && count($mainMenuItem['children']) > 0) {
                $this->generateChildrenMenus($mainMenuItem['children'], $menuItem, $menu);
            }
        }
    }

    /**
     * [generateChildrenMenus description]
     * @param  Array $childrenMenus [description]
     * @param  Object $parent        [description]
     * @param  Object $menu          [description]
     * @return [type]                [description]
     */
    public function generateChildrenMenus($childrenMenus, $parent, $menu) 
    {
        foreach($childrenMenus as $item) {
            $menuItem = new MenuItem;
            $menuItem->menu_id = $menu->id;
            $this->createMenu($menuItem, $item, $parent->id);
            $menuItem->save();
            if(isset($item['children']) && count($item['children']) > 0) {
                $this->generateChildrenMenus($item['children'], $menuItem, $menu);
            }
        }
    }

    /**
     * [createMenu description]
     * @param  Object &$item  [description]
     * @param  Array $values [description]
     * @return [type]         [description]
     */
    public function createMenu(&$item, $values, $parent)
    {
        $item->name = $values['name'];
        $item->description = $values['description'];
        $item->url = $values['url'];
        $item->type = $values['type'];
        $item->parent_id = $parent;
        $item->order = $values['order'];
        $item->icon = $values['icon'];
        $item->is_active = $values['is_active'];
        $item->is_shown_on_menu = $values['is_shown_on_menu'];
        $item->is_publicly_visible = $values['is_publicly_visible'];
    }
}