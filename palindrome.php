<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samir-PHP</title>
</head>
<body>
    <?php
    function isPalindrome($string) {
        $rev = strrev($string);
        return $string == $rev;
    }
    $word = "PHP";
    if (isPalindrome($word)) {
        echo "$word is a Palindrome";
    } else {
        echo "$word is not a Palindrome";
    }
    ?>
</body>
</html>