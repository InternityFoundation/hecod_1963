<?php

trait Sms{
	public function regSms($mobile,$otp){		
		$senderId = "hecdoA";
		$message = "Your Verification OTP $otp";
		
		$curl = curl_init(); 

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://sms.jayinegroup.com/api_v2/message/send",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "sender_id=".$senderId."&message=".$message."&mobile_no=".$mobile,
		  CURLOPT_HTTPHEADER => array(
			"authorization: Bearer 2S_ugKvPeFEmGOUYijXfGwpydYN_sWumyyWggkPhJ7XxGBeJUT-ksNtfSSb1TgWs",
			"cache-control: no-cache",
			"content-type: application/x-www-form-urlencoded"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return false;
		} else {
		  return true; 
		}
	}
}