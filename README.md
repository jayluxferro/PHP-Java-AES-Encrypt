# PHP-Java-AES-Encrypt
## PHP Data Encryption/Decryption Example
```
<?php
	include "security.php";

	define("ENC_KEY","luxferro@@sperix"); // 16 characters for the key

	//performing data encryption
	$raw_message = "Testing";
	$encrypted_data = Security::encrypt($raw_message, ENC_KEY);
	echo "Encrypted data: " . $encrypted_data;

	//performing data decryption
	$decrypted_data = Security::decrypt($encrypted_data, ENC_KEY);
	echo "Decrypted data: " .$decrypted_data;

?>
```
