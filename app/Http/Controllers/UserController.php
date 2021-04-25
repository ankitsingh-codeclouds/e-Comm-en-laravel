<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
}
