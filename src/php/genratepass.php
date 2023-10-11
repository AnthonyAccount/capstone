<?php
function generateRandomPassword($length = 5) {
    // Define characters that can be used in the password
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    
    // Initialize the password variable
    $password = '';
    
    // Get the total number of characters in the character set
    $charCount = strlen($characters);
    
    // Generate a random password
    for ($i = 0; $i < $length; $i++) {
        // Pick a random character from the character set
        $randomChar = $characters[rand(0, $charCount - 1)];
        
        // Append the random character to the password
        $password .= $randomChar;
    }
    
    return $password;
}

// Usage: Generate a random password with a default length of 12 characters
$password = generateRandomPassword();
echo $password;
?>
