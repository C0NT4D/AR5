<?php
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$countryArray= explode(",", $country);
$capitals=[];

for ($i = 0; $i < count($countryArray); $i++) {
    $countryCity["country"] = $countryArray[$i];
    array_push($capitals, $countryCity);
}
echo "<pre>";
print_r($capitals);
?>