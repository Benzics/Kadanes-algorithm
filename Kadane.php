<?php
/**
 * Find the maximum sum of a contiguous sub array
 * @param array $input array
 * @return int
 */
function max_sub_array(array $input)
{
    // at loop start, set $max_sum to the first array element
    $max_sum = $input[0];

    $current_sum = 0;
    $array_size = count($input);

    for ($i = 0; $i < $array_size; $i++)
    {
        // set $current_sum to the maximum between the current element, and the current element plus the $current_sum
        $current_sum = max($input[$i], $input[$i] + $current_sum);

        // if $current_sum is greater than $max_sum we set $max_sum to the value of the $current sum
        $max_sum = max($current_sum, $max_sum);


    }

    return $max_sum;
}

$test_arr = [-3, 1, -8, 12, 0, -3, 5, -9, 4];
// expected result = 14
echo "hello our test result is: " . max_sub_array($test_arr);