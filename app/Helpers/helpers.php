<?php

if (! function_exists('get_user_types')) {
    function get_user_types()
    {
        return [
            'admin' => 'Admin',
            'agent' => 'Agent'
        ];
    }
}
