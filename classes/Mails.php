<?php
trait Mails{
	
	public function forgotMail($email,$key){

		$output = '<html><body>';
		$output .= '<img src="https://hecod.in/img/logos/logo.png" alt="Hecod" />';

		$output='<p>Dear user,</p>';
		$output.='<p>Please click on the following link to reset your password.</p>';
		$output.='<p>-------------------------------------------------------------</p>';
		$output.='<p><a href="https://hecod.in/passwordreset.php?key='.$key.'&email='.$email.'" target="_blank">Reset Passwrod</a></p>'; 
		$output.='<p>-------------------------------------------------------------</p>';
		$output.='<p>If you did not request this forgotten password email, no action 
		is needed, your password will not be reset. However, you may want to log into 
		your account and change your security password as someone may have guessed it.</p>';   
		$output.='<p>Thanks,</p>';
		$output.='<p>Hecod Team</p>';
		$output .= "</body></html>";

		$to = $email;
		$subject = 'Forgot Mail';
		$message = $output;
		$headers = "From: noreply@hecod.in \r\n";
		$headers .= "Reply-To: noreply@hecod.in \r\n";
		$headers .= "MIME-Version: 1.0 \r\n";
		$headers .= "Content-type: text/html; charset=utf-8 \r\n";
		if(mail($to,$subject,$message,$headers)){
			return true;
		} else {
			return false;
		}
	}
	


	public function regMail($email){
		$output = '<html><body>';
		$output .= '<img src="https://hecod.in/img/logos/logo.png" alt="Hecod" />';

		$output='<p>Welcome To Hecod</p>';
		//$output.='<p>Please click on the following link to confirm link your password.</p>';
		//$output.='<p>-------------------------------------------------------------</p>';
		//$output.='<p><a href="https://hecod.in/confirm.php?email='.$email.'" target="_blank">Confirm Account</a></p>'; 
		//$output.='<p>-------------------------------------------------------------</p>';
		//$output.='<p>Welcome to Hecod. Please Confirm your email Account.</p>';   
		$output.='<p>Thanks,</p>';
		$output.='<p>Hecod Team</p>';
		$output .= "</body></html>";

		$to = $email;
		$subject = 'Confirmation';
		$message = $output;
		$headers = "From: noreply@hecod.in \r\n";
		$headers .= "Reply-To: noreply@hecod.in \r\n";
		$headers .= "MIME-Version: 1.0 \r\n";
		$headers .= "Content-type: text/html; charset=utf-8 \r\n";
		if(mail($to,$subject,$message,$headers)){
			return true;
		} else {
			return false;
		}
	}
	
	public function regDocMail($email,$mobile,$password){

		$output = '<html><body>';
		$output .= '<img src="https://hecod.in/img/logos/logo.png" alt="Hecod" />';

		$output='<p>Dear Doctor,</p>';
		$output.='<p>You Have successfully Register With Hecod, Your Login Details is Bloew</p>';
		$output.='<p>-------------------------------------------------------------</p>';
		$output.='<p>Mobile : '.$mobile.'</p>'; 
		$output.='<p>Passwrod : '.$password.'</p>'; 
		$output.='<p>-------------------------------------------------------------</p>'; 
		$output.='<p>Thanks,</p>';
		$output.='<p>Hecod Team</p>';
		$output .= "</body></html>";

		$to = $email;
		$subject = 'Successfully Register';
		$message = $output;
		$headers = "From: noreply@hecod.in \r\n";
		$headers .= "Reply-To: noreply@hecod.in \r\n";
		$headers .= "MIME-Version: 1.0 \r\n";
		$headers .= "Content-type: text/html; charset=utf-8 \r\n";
		if(mail($to,$subject,$message,$headers)){
			return true;
		} else {
			return false;
		}
	}
}
