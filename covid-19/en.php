<?php 

// Store a string into the variable which 
// need to be Encrypted 
$simple_string = "2"; 

// Display the original string 
echo "Original String: " . $simple_string . "\n"; 

// Store cipher method 
$ciphering = "BF-CBC"; 

// Use OpenSSl encryption method 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 

// Use random_bytes() function which gives 
// randomly 16 digit values 
$encryption_iv = random_bytes($iv_length); 

// Alternatively, we can use any 16 digit 
// characters or numeric for iv 
$encryption_key = openssl_digest(php_uname(), 'MD5', TRUE); 

// Encryption of string process starts 
$encryption = openssl_encrypt($simple_string, $ciphering, 
		$encryption_key, $options, $encryption_iv); 

// Display the encrypted string 
echo "<br>Encrypted String: " . $encryption . "\n"; 

// Store cipher method 
$ciphering = "BF-CBC"; 

// Use OpenSSl encryption method 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 

// Decryption of string process starts 
// Used random_bytes() which gives randomly 
// 16 digit values 
$decryption_iv = random_bytes($iv_length); 

// Store the decryption key 
$decryption_key = openssl_digest(php_uname(), 'MD5', TRUE); 

// Descrypt the string 
$decryption = openssl_decrypt ($encryption, $ciphering, 
			$decryption_key, $options, $decryption_iv); 

// Display the decrypted string 
echo "<br>Decrypted String: " . $decryption; 

?> 
