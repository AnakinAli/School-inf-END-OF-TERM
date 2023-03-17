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
                'href' => route('login'),
                'active' => request()->routeIs('login'),
                'name' => __('Log In')
            ],
            [
                'href' => route('register'),
                'active' => request()->routeIs('register'),
                'name' => __('Register')
            ],
        ];
    }
}
