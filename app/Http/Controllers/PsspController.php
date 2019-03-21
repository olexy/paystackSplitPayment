<?php

namespace App\Http\Controllers;

use App\Splitpayment;
use Alert;

use Illuminate\Http\Request;

class PsspController extends Controller
{
    public function store(Request $request)
    {
        $sp = new SplitPayment;

        if ($sp::where('partner', $request->txtname)->first()) {
            Alert::message("Agrrrr!!", "Parner already exists!")->autoclose(3500);
            return view('add');
         }else{
             // Call paystack and insert into db
				$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL => "https://api.paystack.co/subaccount",
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 30,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => "{\n   \"business_name\": \"$request->txtname\",\n   \"settlement_bank\": \"$request->bankname\",\n   \"account_number\": \"$request->txtaccount\",\n   \"percentage_charge\": \"$request->txtcharge\",\n   \"primary_contact_name\": \"$request->txtcontact\",\n   \"primary_contact_phone\": \"$request->txtphone\"}",
				  CURLOPT_HTTPHEADER => array(
				    "Authorization: Bearer sk_test_36e175c5c710aacac84e2a3974988707c0834e7d",
				    "Cache-Control: no-cache",
				    "Content-Type: application/json"
				  ),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);

				$subacc_code ='';
				curl_close($curl);

				if ($err) {
				  echo "cURL Error #:" . $err;
				} else {
				  echo "<br/>=========Paystack Response============<br/>".$response."<br/>";
				  $myfile = file_put_contents('logs.txt', $response.PHP_EOL , FILE_APPEND | LOCK_EX);
				  $ans = json_decode($response);
				  $subacc_code = $ans->data->subaccount_code;
				}
				//CURL ends here
                $sp->partner = $request->txtname;
                $sp->bank = $request->bankname;
                $sp->account = $request->txtaccount;
                $sp->charge = $request->txtcharge;
                $sp->contact = $request->txtcontact;
                $sp->phone = $request->txtphone;
                $sp->account_code = $subacc_code;
        
                $sp->save();

                Alert::success("Business Partner Successfully Added", "Awesome")->autoclose(3500);

                return redirect()->back();
         }    

    }
}
