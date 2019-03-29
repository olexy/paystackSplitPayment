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

        if ($sp::where('account', $request->txtaccount)->first()) {
            Alert::message("Agrrrr!!", "Account number already exists!")->autoclose(3500);
            return view('add');
         }else{
					 // Call paystack to verify account number and insert into db

					  $account = $request->txtaccount;
		    		$bankname = $request->bankname;
		
        $curl = curl_init();
        $url = "https://api.paystack.co/bank/resolve?account_number=$account&bank_code=$bankname";
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
						CURLOPT_TIMEOUT => 30,
						CURLOPT_FAILONERROR => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_36e175c5c710aacac84e2a3974988707c0834e7d",
            "Cache-Control: no-cache",
            "Content-Type: application/json"
            )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

				curl_close($curl);
				
				if ($err) {
					Alert::message($err, "Check your options")->autoclose(3500);
						return view('add');
					} else{
						$ans = json_decode($response);
						$accName = $ans->data->account_name;

						Alert::success($accName, $account)->autoclose(3500);

						//Call paystack and insert into db
						$curl = curl_init();
						curl_setopt_array($curl, array(
							CURLOPT_URL => "https://api.paystack.co/subaccount",
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_ENCODING => "",
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 30,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => "POST",
							CURLOPT_POSTFIELDS => "{\n   \"business_name\": \"$request->txtname\",\n   \"settlement_bank\": \"$request->hidBankName\",\n   \"account_number\": \"$request->txtaccount\",\n   \"percentage_charge\": \"$request->txtcharge\",\n   \"primary_contact_name\": \"$request->txtcontact\",\n   \"primary_contact_phone\": \"$request->txtphone\"}",
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
				} 
				//CURL ends here
					$sp->partner = $request->txtname;
					$sp->bank = $request->hidBankName;
					$sp->account = $request->txtaccount;
					$sp->charge = $request->txtcharge;
					$sp->contact = $request->txtcontact;
					$sp->email = $request->txtemail;
					$sp->account_code = $subacc_code;
	
					$sp->save();

					Alert::success("Business Partner Successfully Added", "Awesome")->autoclose(3500);

					return redirect()->back();
         } 
            
				}

			public function transact(Request $request)
			{
	
				// Call paystack and insert into db
				$curl = curl_init();
				curl_setopt_array($curl, array(
					CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "POST",
					CURLOPT_POSTFIELDS => "{\n   \"email\": \"$request->email\", \n   \"amount\": \"$request->txtamount\", \n   \"subaccount\": \"$request->partner\"}",
					CURLOPT_HTTPHEADER => array(
						"Authorization: Bearer sk_test_36e175c5c710aacac84e2a3974988707c0834e7d",
						"Cache-Control: no-cache",
						"Content-Type: application/json"
					),
				));
	
				$response = curl_exec($curl);
				$err = curl_error($curl);
	
				$auth_code ='';
				curl_close($curl);
	
				if ($err) {
					echo "cURL Error #:" . $err;
				} else {
					echo "<br/>=========Paystack Response============<br/>".$response."<br/>";
					$myfile = file_put_contents('logs.txt', $response.PHP_EOL , FILE_APPEND | LOCK_EX);
					$ans = json_decode($response);
					$auth_code = $ans->data->authorization_url;

					return redirect()->away($auth_code);
				}
	
					// return redirect()->back();
			}
			
			public function list(Request $request)
			{
	
				// Call paystack and insert into db
				$curl = curl_init();
				curl_setopt_array($curl, array(
					CURLOPT_URL => "",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "GET",
					// CURLOPT_POSTFIELDS => "{\n   \"subaccount\": \"$request->partner\",\n   \"transaction_charge\": \"$request->txtcharge\",\n   \"primary_contact_name\": \"$request->txtcontact\",\n   \"primary_contact_email\": \"$request->txtemail\"}",
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
	
					return redirect()->back();
			}  
	}
