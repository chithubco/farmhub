<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function register(UserRequest $request){



        $new_user = User::create($request->all());

        if ($new_user){

            return view('confirmation');
        }
        else{

            return view('welcome');
        }
    }

    public function confirmation(){

        return view('confirmation');
    }
}
