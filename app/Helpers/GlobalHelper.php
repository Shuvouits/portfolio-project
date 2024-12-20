<?php

/** Set sidebar active **/

use App\Models\GeneralSetting;

if(!function_exists('setSidebarActive')){
    function setSidebarActive(array $routes) : ?String
    {
        foreach($routes as $route){
            if(request()->routeIs($route)){
                return 'active';
            }
        }
        return null;
    }
}

/**  General function */

if (!function_exists('get_general_setting')) {
    function get_general_setting()
    {
        return GeneralSetting::first();
    }
}
