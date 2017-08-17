# PHP-Java-AES-Encrypt
## PHP Data Encryption/Decryption Example
Create a file called "example.php" and paste the code snippet below
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

## Java Data Encryption/Decryption Example
Create a file called "example.java" and paste the code snippet below
```
public class Example{
	private Security enc = new Security();
	
	public static void main(String[] args) {
	  String key = "luxferro@@sperix"; //16 character key
	  String data = "example";
	  System.out.println(Security.decrypt(Security.encrypt(data, key), key));
	  System.out.println(Security.encrypt(data, key));	    
	}
}
```
