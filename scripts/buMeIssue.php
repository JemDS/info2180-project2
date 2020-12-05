<?php

/*password hashing*/
echo password_hash("password123", PASSWORD_DEFAULT);


/*pasword dehashing
$input = "password123";
$hashedpasswordInDb = password_hash("password123", PASSWORD_DEFAULT);
echo password_verify($input, $hashedpasswordInDb);
*/
?>