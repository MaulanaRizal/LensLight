<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class UsersController extends Controller
{

    public function index(){

        $BreadCrumbs = new BreadCrumb();
        $BreadCrumbs->addBreadCrumb("Dashboard",route('dashboard'));
        $BreadCrumbs->addBreadCrumb("Users",route('users'),true);

        $data = array(
            "title" => "Users",
            "BreadCrumbs" => $BreadCrumbs->getBreadCrumb(),
        );

        return view("auth.settings.users.index",$data);
    }


    public function getuserData(){
        $user = User::all();

        $datatables = DataTables::of($user)->addColumn('action',function($user){
            $editUrl = route('edit user',['id'=> $user->id]);
            return "<a href='$editUrl'>Edit </a> | <a href='#'>Delete</a> "; 
        })->make(true);
        
        return $datatables;
    }

    public function create(){
        $BreadCrumbs = new BreadCrumb();
        $BreadCrumbs->addBreadCrumb("Dashboard",route('dashboard'));
        $BreadCrumbs->addBreadCrumb("Users",route('users'));
        $BreadCrumbs->addBreadCrumb("Create User","");

        $data = array(
            "title" => "Users",
            "BreadCrumbs" => $BreadCrumbs->getBreadCrumb(),
        );

        return view('auth.settings.users.create',$data);
    }

    public function insert(Request $request){
        try{

            $NewUser = $request->validate([
                'name'=> 'required|string|max:255',
                'role' => 'required',
                'phone_number' => 'string|max:15|nullable',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
            ]);

            $user = new User();

            $user->name = $NewUser['name'];
            $user->role = $NewUser['role'];
            $user->phone_number = $NewUser['phone_number'];
            $user->email = $NewUser['email'];
            $user->password = bcrypt($NewUser['password']);

            $user->save();

            return redirect()->route('users')->with('success','User create successfully.');
            
        }catch(Exception $e){
            return redirect()->route('create user')->with('error',$e->getMessage());

        }
    }

    public function edit($id){
        try{

            $user = User::find($id);
            if(!$user) throw new Exception();

            $BreadCrumbs = new BreadCrumb();
            $BreadCrumbs->addBreadCrumb("Dashboard",route('dashboard'));
            $BreadCrumbs->addBreadCrumb("Users",route('users'));
            $BreadCrumbs->addBreadCrumb("Edit User","");
    
            $data = array(
                "title" => "Users",
                "BreadCrumbs" => $BreadCrumbs->getBreadCrumb(),
                "user" => $user,
            );
    
            return view('auth.settings.users.edit',$data);

        }catch(Exception $e){
            abort(404);
        }

    }

    public function update(Request $request,$id){
        try{
            $NewUser = $request->validate([
                'name'=> 'required|string|max:255',
                'role' => 'required',
                'phone_number' => 'string|max:15|nullable',
                'email' => 'required|email',
                // 'password' => 'required|min:6',
            ]);
            
            $user = User::findOrFail($id);
            
            // Note : validate email change
            if($request->input('email') != $user->email){
                $NewUser = $request->validate([
                    
                    'email' => 'required|email|unique:users,email',
                ]);
            }
            
            // Note : validate password change
            if($request->input('change_password')){
                $NewUser = $request->validate([
                    'password' => 'required|min:6',
                ]);
                $user->password = bcrypt($NewUser['password']);
            }
            
            return var_dump($NewUser);
            
            
            $user->name = $NewUser['name'];
            $user->role = $NewUser['role'];
            $user->phone_number = $NewUser['phone_number'];
            $user->email = $NewUser['email'];
            
            return redirect()->route('users')->with('success','User updated successfully.');
        }catch(Exception $e){
            return redirect()->route('edit user',['id' => $id])->with('error',$e->getMessage());
        }
    }
    
}
