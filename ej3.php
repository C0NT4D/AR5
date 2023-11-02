<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$countryArray= explode(",", $country);
$cityArray = explode(",", $city);
$capitals=[];

for ($i = 0; $i < count($countryArray); $i++) 
{
    $countryCity["country"] = $countryArray[$i];
    $countryCity["city"] = $cityArray[$i];
    array_push($capitals, $countryCity,);
}
echo "<pre>"; 
print_r($capitals);
?>