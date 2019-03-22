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
        return view('/transact')->with('partners', $partners);
    }
}
