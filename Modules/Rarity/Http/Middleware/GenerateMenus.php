<?php

namespace Modules\Rarity\Http\Middleware;

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
//            // Rarities
//            $menu->add('<i class="nav-icon fa-solid fa-compass"></i> '.__('Rarities'), [
//                'route' => 'backend.rarities.index',
//                'class' => 'nav-item',
//            ])
//            ->data([
//                'order'         => 77,
//                'activematches' => ['admin/rarities*'],
//                'permission'    => ['view_rarities'],
//            ])
//            ->link->attr([
//                'class' => 'nav-link',
//            ]);
//        })->sortBy('order');

        return $next($request);
    }
}
