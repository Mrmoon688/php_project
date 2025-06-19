<?php
class User
{
    public function register($request)
    { //$_POST method  အားလုံးကို $request[array]  အနေနဲ့ လက်ခံလိုက်တယ်
        // print_r($request);
        $error = [];
        if (isset($request)) {
            if (empty($request['name'])) {
                $error[] = "Name is required";
            }
            if (empty($request['password'])) {
                $error[] = "Password is required";
            }

            if (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
                $error[] = "Invalid Email format";
            }

            if (empty($request['email'])) {
                $error[] = "Email is required";
            }
            //check if email already exist
            $user = DB::table('users')->where('email', $request['email'])->getOne();
            if ($user) {
                $error[] = "Email already exist";
            }
            if (count($error)) {
                return $error;
            } else {

                //inset data into database
                $user = DB::create('users', [
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => password_hash($request['password'], PASSWORD_BCRYPT)
                ]);
                //session _userid
                $_SESSION['user_id'] = $user->id;

                return 'success';   //မှန်ရင် True(success) return ပြန်မယ်
            }
        }
    }
}
