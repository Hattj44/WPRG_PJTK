<?php
function sum_digits_until_ten($number) {
    while (true) {
        $sum = 0;
        while ($number != 0) {
            $sum += $number % 10;
            $number = intval($number / 10);
        }

        if ($sum < 10) {
            echo "Suma cyfr: $sum<br>";
            $number = $sum; 
        } else {
            break; 
        }
    }
    return $sum;
}


$number = 12345;
echo "Początkowa liczba: $number\n";
$final_sum = sum_digits_until_ten($number);
echo "Ostateczna suma cyfr: $final_sum";
?>