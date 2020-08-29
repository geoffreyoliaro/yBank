<?php

namespace App\Http\Controllers\api\accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountsController extends Controller
{
    public function create(Request $request){
        $valid = validator($request->only('name', 'balance'),[
            'name'=>'required|string',
            'balance'=>'required'
        ]); 
        if($valid->fails()){
            return response()->json(["errors"=> $valid->errors()->all()],400);
        }
        $account = DB::table('accounts')
                    ->where('name',$request->name)
                    ->exists();

        if($account === true){
            return response()->json(["message"=>"account already exists please login"],400);
        }
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
