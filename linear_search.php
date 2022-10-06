<?php
// Linear Searching
$numbers = [67,56,90,34,100,34];
$index = 34;
$count = count($numbers)-1;
$returnedIndex = linearSearch($numbers,$index, $count);
echo "<p>Value Placed at index: ",$returnedIndex,"</p>";
function linearSearch($numbers,$index, $count)
{

    for($i = 0; $i < $count; $i++)
    {
        if($numbers[$i] == $index)
        {
            return $i;        
        }
    }
}
?>