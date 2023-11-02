<?php
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$cities = explode(',', $city);
$countries = explode(',', $country);

$array = array();

for ($i = 0; $i < count($cities); $i++) {
    $array[] = array(
        'city' => $cities[$i],
        'country' => $countries[$i]
    );
}
echo  "<pre>"; 
var_dump($array);
?>