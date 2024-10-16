<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showAlltrans(){

        $transactions = Transaction::orderBy('updated_at','desc')->get();

        return view('showall-transactions', ['transactions'=>$transactions]);
    }

    public function readTrans(Request $request){
        $transaction = Transaction::find($request->id);
        return view('transaction', ['transaction'=>$transaction]);
    }

    public function createTrans(){
        return view('create-transaction');
    }

    public function storeTrans(Request $request){
        $validated = $request->validate([
            'transaction_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status'=> 'required|string|max:255',
            'total_amount'=> 'required|string|max:255' ,
            'transaction_number'=> 'required|string|max:255',
        ]);

        Transaction::create($validated);

        return redirect()->route('showAlltrans')->with('success', 'User created successfully');

    }


    public function getTrans(Request $request){

        $transactions = Transaction::find($request->id);
        return view('edit-transaction',['transaction'=>$transactions]);
    }

    public function updateTrans(Request $request){
        $transactions = Transaction::find($request->id);

        $validated = $request->validate([
            'transaction_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status'=> 'required|string|max:255',
            'total_amount'=> 'required|string|max:255' ,
            'transaction_number'=> 'required|string|max:255',
        ]);

        
        $transactions->update($validated);

        return redirect()->route('showAlltrans');
    }

    public function deleteTrans(Request $request){
        $transactions = Transaction::find($request->id);

        if($transactions){
            $transactions->delete();
        }

        return redirect()->route('showAlltrans')->with('success','user deleted successfully');
    }
}
