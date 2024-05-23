<?php
function is_pangram($text) {
    $text = strtolower($text);
    

    $letters = array_fill_keys(range('a', 'z'), false);

    for ($i = 0; $i < strlen($text); $i++) {
        if (ctype_alpha($text[$i])) {
            $letters[$text[$i]] = true;
        }
    }

    return !in_array(false, $letters);
}

$text = "The quick brown fox jumps over the lazy dog.";

$result = is_pangram($text);

var_dump($result);

?>