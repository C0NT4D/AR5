<?php

$name = "Neville Marks is 77 years old,Laurel Buckner is 73 years old,Zia Bullock is 25 years old ";


$nameArray= explode(",", $name);
$union=[];

for ($i = 0; $i < count($nameArray); $i++) 
{
    $nameage["name"] = $nameArray[$i];
    array_push($union, $nameage,);
}
echo "<pre>"; 
print_r($union);
?>