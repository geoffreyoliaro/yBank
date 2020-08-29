<?php

namespace App\Http\Controllers\accounts;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function create(Request $request){
      $account = $request->validate($request,[
            'name'=>'required|String',
            'balance'=>'required|Integer'            
        ]);
        $account = DB::table('accounts')->insert([
            'name' => $request->name,
            'balance' => $request->balance
        ]);

      
        return response([
            'status'=>1,
            'payload'=>$account,
            'message'=>'Account created Successfuly'
        ]);
    }

}
