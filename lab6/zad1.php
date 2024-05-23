<?php
function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    if ($n <= 3) {
        return true;
    }
    if ($n % 2 == 0 || $n % 3 == 0) {
        return false;
    }
    for ($i = 5; $i * $i <= $n; $i += 6) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) {
            return false;
        }
    }
    return true;
}

function print_primes_in_range($start, $end) {
    for ($num = $start; $num <= $end; $num++) {
        if (is_prime($num)) {
            echo $num . "\n";
        }
    }
}


print_primes_in_range(10, 50);
?>
