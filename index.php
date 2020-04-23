<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo "Chữ cái đầu có viết hoa";
    } else {
        echo "Chữ cái đầu không viết hoa";
    }
}

isFirstLetterUpperCase("Nguyen Van A");
echo "<br>";
isFirstLetterUpperCase("nguyen van a");
echo "<br>";
isFirstLetterUpperCase("NGUYEN VAN A");
echo "<br>";
isFirstLetterUpperCase("nguyen VAN a");