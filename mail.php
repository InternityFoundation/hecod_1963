<?php


             
		$to = 'hasanaquiv@gmail.com';
		$subject = 'Forgot Mail';
		$message = "<a href='#'>hjhjhjh</a>";
		$headers = "From: noreply@hecod.in \r\n";
		$headers .= "Reply-To: noreply@hecod.in \r\n";
		$headers .= "MIME-Version: 1.0 \r\n";
		$headers .= "Content-type: text/html; charset=utf-8 \r\n";











/*
		$to = 'hasanaquiv@gmail.com';
		$subject = 'Forgot Mail';
		$message = "<a href='#'>hjhjhjh</a>";
		$headers = "From: noreply@hecod.in \r\n";
		$headers .= "Reply-To: noreply@hecod.in \r\n";
		$headers .= "MIME-Version: 1.0 \r\n";
		$headers .= "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "Content-Transfer-Encoding: quoted-printable \r\n";*/
		if (mail($to, $subject, $message, $headers)) {
              echo 'Your message has been sent.';
            } else {
              echo 'There was a problem sending the email.';
            }