<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UsersController extends Controller
{
    public function index(){
        return view("auth.settings.users");
    }

    public function getuserData(){
        $user = User::all();

        $datatables = DataTables::of($user)->addColumn('action',function(){
            return "<a href='#'>Edit </a> | <a href='#'>Delete</a> "; 
        })->make(true);
        
        return $datatables;
    }
}
