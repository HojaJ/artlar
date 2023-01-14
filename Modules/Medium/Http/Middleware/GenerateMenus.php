<?php

namespace Modules\Medium\Http\Middleware;

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
//            // Media<i class="fa-solid fa-paintbrush"></i>
//            $menu->add('<i class="nav-icon fa-solid fa-paintbrush"></i> '.__('Medium'), [
//                'route' => 'backend.medium.index',
//                'class' => 'nav-item',
//            ])
//            ->data([
//                'order'         => 77,
//                'activematches' => ['admin/medium*'],
//                'permission'    => ['view_medium'],
//            ])
//            ->link->attr([
//                'class' => 'nav-link',
//            ]);
//        })->sortBy('order');

        return $next($request);
    }
}
