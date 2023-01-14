<?php

namespace Modules\Material\Http\Middleware;

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
//        \Menu::make('admin_sidebar', function ($menu) {
//
//            // Materials<i class=""></i>
//            $menu->add('<i class="nav-icon fa-solid fa-sheet-plastic"></i> '.__('Materials'), [
//                'route' => 'backend.materials.index',
//                'class' => 'nav-item',
//            ])
//            ->data([
//                'order'         => 77,
//                'activematches' => ['admin/materials*'],
//                'permission'    => ['view_materials'],
//            ])
//            ->link->attr([
//                'class' => 'nav-link',
//            ]);
//        })->sortBy('order');

        return $next($request);
    }
}
