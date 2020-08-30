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
    public function getAccountById($id){       
            $account = DB::table('accounts')
                ->whereRaw("id=$id")
                ->get();

            return $account;
    }
    public function getTransactionsById($id){
        $transactions = DB::table('transactions')
            ->whereRaw("`from`=$id OR `to`=$id")
            ->get();

        return $transactions;
    }

    
        public function commitTransaction (Request $request, $id) {
            $valid = validator($request->only('to', 'amount','details'),[
                'to'=>'required',
                'amount'=>'required',
                'details'=>'required|String'            
            ]); 
            if($valid->fails()){
                return response()->json(["errors"=> $valid->errors()->all()],400);
            }
            $to = $request->input('to');
            $amount = $request->input('amount');
            $details = $request->input('details');
    
            $account = DB::table('accounts')
                ->whereRaw("id=$id")
                ->update(['balance' => DB::raw('balance-' . $amount)]);
    
            $account = DB::table('accounts')
                ->whereRaw("id=$to")
                ->update(['balance' => DB::raw('balance+' . $amount)]);
    
           $transaction = DB::table('transactions')->insert(
                [
                    'from' => $id,
                    'to' => $to,
                    'amount' => $amount,
                    'details' => $details
                ]
            );
            return response([
                'status'=>1,
                'payload'=>$transaction,
                'message'=>'Transaction Successful'
            ]);
        }
    
}
