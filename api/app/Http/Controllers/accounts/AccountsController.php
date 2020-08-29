<?php

namespace App\Http\Controllers\accounts;

use App\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountsController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }    

    public function createAccount(Request $request){
        $this->validate($request,[
            'name'=>'required|string|unique:accounts',
            'balance'=>'required'
        ]);

        
        $account = new Account;
        $account->name = $request->input('name');
        $account->balance = $request->input('balance');
        $account->save();  

        return view('/account_details')->with('account', $account);
        
        // DB::table('accounts')
        //     ->where('name', $request->name)
        //     ->get()


        
        // return response()->json($account);
        
    }
}
