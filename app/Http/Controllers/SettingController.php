<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{


    public function Roles(){
        return view("auth.settings.users");
    }

    public function Access(){
        return view("auth.settings.users");
    }

    public function Tags(){
        return view("auth.settings.users");
    }

    public function Unit(){
        return view("auth.settings.users");
    }
}
