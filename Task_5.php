<?php
function generatePassword($length) {
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowerCase. $upperCase . $numbers . $specialChars;

       $totalChars = strlen($allChars);

     $password = '';

     for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $totalChars - 1);

        $password .= $allChars[$randomIndex];
    }

    return $password;
}

$generatedPassword = generatePassword(12);

echo "Generated Password: " . $generatedPassword;
