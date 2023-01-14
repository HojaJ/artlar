<?php

namespace Modules\Work\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        \Menu::make('admin_sidebar', function ($menu) {

            $workControl =  $menu->add('<i class="nav-icon fa-solid fa-swatchbook"></i> '.__('Works'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 81,
                'activematches' => [
                    'admin/works*',
                    'admin/medium*',
                    'admin/movements*',
                    'admin/rarities*',
                    'admin/materials*'
                ],
                'permission'    => ['view_works'],
            ]);

            $workControl->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            //Submenu: Materials
            $workControl->add('<i class="nav-icon fa-solid fa-sheet-plastic"></i> '.__('Materials'), [
                'route' => 'backend.materials.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => ['admin/materials*'],
                'permission'    => ['view_materials'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            //Submenu: Mediums
            $workControl->add('<i class="nav-icon fa-solid fa-paintbrush"></i> '.__('Medium'), [
                'route' => 'backend.medium.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => ['admin/medium*'],
                'permission'    => ['view_medium'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            //Submenu: Movements
            $workControl->add('<i class="nav-icon fa-regular fa-lightbulb"></i> '.__('Movements'), [
                'route' => 'backend.movements.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 84,
                'activematches' => ['admin/movements*'],
                'permission'    => ['view_movements'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            //Submenu: Rarities
            $workControl->add('<i class="nav-icon fa-solid fa-compass"></i> '.__('Rarities'), [
                'route' => 'backend.rarities.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 84,
                'activematches' => ['admin/rarities*'],
                'permission'    => ['view_rarities'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            //Submenu: Works
            $workControl->add('<i class="nav-icon fa-solid fa-briefcase"></i> '.__('Works'), [
                'route' => 'backend.works.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 85,
                'activematches' => ['admin/works*'],
                'permission'    => ['view_works'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);






        })->sortBy('order');

        return $next($request);
    }
}
