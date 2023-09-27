<?php
$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($inputText) {
        $lowercaseText = strtolower($inputText);
    
    $modifiedText = str_replace("brown", "red", $lowercaseText);

    return $modifiedText;
}

$modifiedText = modifyText($text);
echo $modifiedText;
