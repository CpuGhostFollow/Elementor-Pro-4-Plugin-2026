<?php
function array_sum_recursive($array) {
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += array_sum_recursive($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
}
function array_product_recursive($array) {
    $product = 1;
    foreach ($array as $value) {
        if (is_array($value)) {
            $product *= array_product_recursive($value);
        } else {
            $product *= $value;
        }
    }
    return $product;
}
function flatten_array($array) {
    $flat = [];
    foreach ($array as $value) {
        if (is_array($value)) {
            $flat = array_merge($flat, flatten_array($value));
        } else {
            $flat[] = $value;
        }
    }
    return $flat;
}
function unique_array($array) {
    return array_values(array_unique($array));
}
function sort_array_desc($array) {
    rsort($array);
    return $array;
}
function filter_even_numbers($array) {
    return array_filter($array, function($num) {
        return $num % 2 === 0;
    });
}
function filter_odd_numbers($array) {
    return array_filter($array, function($num) {
        return $num % 2 !== 0;
    });
}
function generate_fibonacci($n) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}
function is_prime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) return false;
    }
    return true;
}
function prime_numbers_up_to($n) {
    $primes = [];
    for ($i = 2; $i <= $n; $i++) {
        if (is_prime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}
