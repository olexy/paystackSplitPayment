<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicDependent extends Controller
{
    //

    // function index()
    // {
    //  $partners = DB::table('splitpayments')
    //                 ->groupBy('email')
    //                 ->get();
    //  return view('transact')->with('partners', $partners);
    // }

    // public function fetch(Request $request){
    //     $select = $request->get('select');
    //     $value = $request->get('value');
    //     $dependent = $request->get('dependent');
    //     $data = DB::table('splitpayments')
    //             ->where($select, $value)
    //             ->groupBy($dependent)
    //             ->get();
    //     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
    //     foreach($data as $row)
    //     {
    //     $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
    //     }
    //     echo $output;
    // }
}
?>