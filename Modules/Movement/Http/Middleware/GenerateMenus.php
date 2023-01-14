<?php

namespace Modules\Movement\Http\Middleware;

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
//            // Movements<i class=""></i>
//            $menu->add('<i class="nav-icon fa-regular fa-lightbulb"></i> '.__('Movements'), [
//                'route' => 'backend.movements.index',
//                'class' => 'nav-item',
//            ])
//            ->data([
//                'order'         => 77,
//                'activematches' => ['admin/movements*'],
//                'permission'    => ['view_movements'],
//            ])
//            ->link->attr([
//                'class' => 'nav-link',
//            ]);
//        })->sortBy('order');

        return $next($request);
    }
}
