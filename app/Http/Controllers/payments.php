<?php

namespace App\Http\Controllers;
use App\Payment;
use Illuminate\Http\Request;

class payments extends Controller
{
    public function create(Request $request){
        $data=$request->validate([
            'name'=> 'required|string',
            'account_id'=> 'required|integer',
            'email'=>'required|email',
            'text'=>'required|string',
            'Ammount'=>'required|integer',
            'user_id'=>'required|integer',
        ]);

        $account= Payment::create($data);
        return response($account, 200);

    }

    public function index(){
        $account=Account::all();
    }
}
