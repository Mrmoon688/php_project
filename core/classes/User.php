<?php
class User
{
    public function register($request)        // post method အားလုံးကို array[] $_COOKIE
    {
        // print_r($request);
        $error = [];
        if (isset($request)) {
            if (empty($request['name'])) {
                $error[] = 'name is required';
            }
            if (empty($request['email'])) {
                $error[] = 'email is required';
            }
            if (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
                $error[] = 'invalid email format';
            }
            if (empty($request['password'])) {
                $error[] = 'password is required';
            }
            if (count($error)) {
                return $error;
            } else {
                return true;
            }
        }
    }
}
