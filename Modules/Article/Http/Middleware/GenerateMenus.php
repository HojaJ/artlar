<?php

namespace Modules\Article\Http\Middleware;

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
        \Menu::make('admin_sidebar', function ($menu) {

            // Articles Dropdown
            $articles_menu = $menu->add('<i class="nav-icon fas fa-file-alt"></i> '.__('Article'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 91,
                'activematches' => [
                    'admin/posts*',
                    'admin/categories*',
                ],
                'permission' => ['view_posts', 'view_categories'],
            ]);
            $articles_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Posts
            $articles_menu->add('<i class="nav-icon fas fa-file-alt"></i> '.__('News'), [
                'route' => 'backend.posts.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 92,
                'activematches' => 'admin/posts*',
                'permission'    => ['edit_posts'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Submenu: In the News
            $articles_menu->add('<i class="nav-icon fas fa-file-alt"></i> '.__('In the News'), [
                'route' => 'backend.innews.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 92,
                    'activematches' => 'admin/innews*',
                    'permission'    => ['view_innews'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Submenu: Categories
//            $articles_menu->add('<i class="nav-icon fas fa-sitemap"></i> '.__('Categories'), [
//                'route' => 'backend.categories.index',
//                'class' => 'nav-item',
//            ])
//            ->data([
//                'order'         => 93,
//                'activematches' => 'admin/categories*',
//                'permission'    => ['edit_categories'],
//            ])
//            ->link->attr([
//                'class' => 'nav-link',
//            ]);
        })->sortBy('order');

        return $next($request);
    }
}
