<?php

namespace App\Controllers;

class User extends BaseController
{
    public function module1()
    {
        return view('user');
    }
    public function module2()
    {
        return view('uservoters');
    }
    public function module3()
    {
        return view('useritems');
    }
}
