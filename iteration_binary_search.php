<?php
echo "<p>Binary Search with Itration Method</p>";
$numbers = [45,67,23,1,3,90,56];
echo "<p>Numbers array </p>";
print_r($numbers);
$low = 0;
$high = count($numbers)-1;
$indexedValue = 3;

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