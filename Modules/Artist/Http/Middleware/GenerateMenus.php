<?php

namespace Modules\Artist\Http\Middleware;

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

            // Artists
            $artistControl =  $menu->add('<i class="nav-icon fa-solid fa-user-tie"></i> '.__('Artists'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 77,
                'activematches' => [
                    'admin/artists*',
                    'admin/countries*',
                    'admin/professions*',
                ],
                'permission'    => ['view_artists'],
            ]);

            $artistControl->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Countries
            $artistControl->add('<i class="nav-icon fa-solid fa-user-alt"></i> Artists', [
                'route' => 'backend.artists.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 80,
                'activematches' => 'admin/artists*',
                'permission'    => ['view_artists'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Submenu: Countries
            $artistControl->add('<i class="nav-icon fa-solid fa-globe"></i> Countries', [
                'route' => 'backend.countries.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 78,
                'activematches' => 'admin/countries*',
                'permission'    => ['view_countries'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Submenu: Professions
            $artistControl->add('<i class="nav-icon fa-solid fa-palette"></i> Professions', [
                'route' => 'backend.professions.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 79,
                'activematches' => 'admin/professions*',
                'permission'    => ['view_professions'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

        })->sortBy('order');

        return $next($request);
    }
}
