<?php

namespace App\Http\Controllers;

use App\Splitpayment;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function transact()
    {
        $partners = Splitpayment::all();
        // $email = Splitpayment::where('partner', $name);
        return view('transact')->with('partners', $partners);
    }

    public function findEmail(Request $request){

        $data=Splitpayment::select('email')->where('account_code',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
    }
    
    public function callbackFunct(Request $request) {
        $reference = $request->reference;
        return view('welcome')->with('reference', $reference);
     }

    
}