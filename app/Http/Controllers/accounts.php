<?php

namespace App\Http\Controllers;
use App\Account;
use Illuminate\Http\Request;

class accounts extends Controller
{
    public function create(Request $request){
        // $data=$request->validate([
        //     'name'=> 'require',
        //     'description'=>'required|string',
        //     'Ammount'=>'required|integer',
        //     'user_id'=>'required|integer',
        // ]);

        $account= Account::create([
            'name'=> $request->name,
            'description'=>$request->description,
            'Ammount'=>$request->Ammount,
            'user_id'=>$request->user_id,
        ]);
        return response($account,200);

    }

    public function update(Request $request, Account $account){
        $data=$request->validate([
            'name'=> 'required|string',
            'description'=>'required|string',
            'Ammount'=>'required|integer',
            'user_id'=>'required|integer',
        ]);

        $account->update($data);
        return response($account,200);

    }

    public function index(){
        $account=Account::all();
    }

    

    
}
