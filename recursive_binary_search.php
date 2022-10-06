<?php

echo "<p>Binary Search with Recursive Method</p>";

$numbers = [34,56,4,67,89,9,23,4,45,4543];

echo "<p>Numbers array</p>";
print_r($numbers);

$low = 0;
$high = count($numbers)-1;
$searchedValue =  4543 ;

$searchedIndex = binary_search($numbers, $low, $high, $searchedValue);

echo "<p>value ",$searchedValue," found at index ",$searchedIndex,"</p>";

function binary_search($numbers, $low, $high, $searchedValue)
{
    
    if($high >= $low)
    {
        $mid = (int)($low + ($high - $low)/2);
        // $mid = ($low + $high) /2;

        if($numbers[$mid] == $searchedValue)
        {
            return $mid;
        }
        else if($numbers[$mid] > $searchedValue)
        {
            $high = $mid - 1;
            return binary_search($numbers, $low,$high, $searchedValue);
        }
        else
        {
            $low = $mid + 1;
            return binary_search($numbers, $low, $high, $searchedValue);
        }
       
    }
}


?>