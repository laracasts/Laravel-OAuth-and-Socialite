<?php namespace Laracasts;


interface AuthenticateUserListener {

    /**
     * @param $user
     * @return mixed
     */
    public function userHasLoggedIn($user);

}