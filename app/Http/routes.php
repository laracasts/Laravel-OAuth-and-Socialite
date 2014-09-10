<?php

// Just a dummy page to demonstrate the authentication (or lack of).
get('/', function()
{
    if (Auth::check()) return 'Welcome back, '  . Auth::user()->username;

    return 'Hi guest. ' . link_to('login', 'Login With Github!');
});

// Login a user with GitHub (or any provider).
get('login', 'AuthController@login');

