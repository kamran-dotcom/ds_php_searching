<?php
echo "<p>Binary Search tree with Itration Method</p>";
$numbers = [45,67,23,45,3,45,56];
echo "<p>Numbers array </p>";
print_r($numbers);
$low = 0;
$high = count($numbers)-1;
$indexedValue = 45;

$searchedIndex = binarySearch($numbers, $low, $high, $indexedValue);

echo "<p>",$indexedValue," Value availabe at index ",$searchedIndex,"</p>";

function binarySearch($numbers, $low, $high, $indexedValue)
{
    $mid = $low + ($high - $low)/2;
    
    while($low <= $high)
    {

        if($numbers[$mid] == $indexedValue)
        {
            return $mid;
        }
        else if($indexedValue > $numbers[$mid])
        {
            $low = $mid + 1;
        }
        else 
        {
            $high = $mid - 1;
        }
    }
}

?>