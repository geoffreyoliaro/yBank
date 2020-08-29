<?php

namespace App\Http\Controllers\api\accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    public function create(Request $request){
         
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
