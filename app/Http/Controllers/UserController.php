<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    //
    function login(Request $req) {
        $user = User::where(['email'=>$req->email])->first();
        //return $req->password;
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Username & Password does not match";
        }else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
    function register(Request $req){

        $validated = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required',
            'password'=>'required',
            'cpassword'=>'required'
        ]); 

        if($validated->fails()){
            return redirect('/register2')->withErrors($validated);
        }

        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
