<?php

namespace App\View\Components;

class NavigationBarLayout
{
    public static function getAllLinksForAdminLayout()
    {
        return [
            [
                'href' => route('dashboard'),
                'active' => request()->routeIs('dashboard'),
                'name' => __('Dashboard')
            ],
            [
                'href' => route('add_topic'),
                'active' => request()->routeIs('topics'),
                'name' => __('Add Topic')
            ],
            [
                'href' => route('add_publication'),
                'active' => request()->routeIs('publications'),
                'name' => __('Add Publication')
            ],
        ];
    }
    public static function getAllLinksForGuestLayout()
    {
        return [
            [
                'href' => route('welcome'),
                'active' => request()->routeIs('welcome'),
                'name' => __('Home')
            ],
            [
                'href' => route('welcome'),
                'active' => request()->routeIs('d'),
                'name' => __('Light Electronics')
            ],
            [
                'href' => route('welcome'),
                'active' => request()->routeIs('d'),
                'name' => __('Heavy Electronics')
            ],
            [
                'href' => route('welcome'),
                'active' => request()->routeIs('d'),
                'name' => __('Positive Influence')
            ],
            [
                'href' => route('login'),
                'active' => request()->routeIs('login'),
                'name' => __('Log In')
            ],
        ];
    }
}
