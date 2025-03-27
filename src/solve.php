<?php

function solve($Coupon_Code) {
    // Convert string to array of characters and count them
    $letters = array_count_values(str_split($Coupon_Code));
    
    // Check if we have all required letters
    if (!isset($letters['h']) || !isset($letters['a']) || 
        !isset($letters['p']) || !isset($letters['y'])) {
        return 0;
    }
    
    // Calculate how many times we can make "happy"
    // We need: 1 'h', 1 'a', 2 'p's, 1 'y'
    return min(
        $letters['h'],
        $letters['a'],
        floor($letters['p'] / 2),  // divide by 2 because we need 2 'p's
        $letters['y']
    );
} 