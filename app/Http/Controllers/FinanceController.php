<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class FinanceController extends Controller
{
    //
    public function index(){

        return view('finance');
    }

    public function search(Request $request){

        $user = User::where('phone_number',$request['phone_number'])->first();

        $message = "User not Found in Database";
        if ($user){

            return view('capital_form',compact('user'));

        }
        else{
            return view('finance',compact('message'));
        }
    }
}
