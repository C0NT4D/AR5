<?php
$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";

$data_array = explode('; ', $data);

$data_array[count($data_array) - 1] = rtrim($data_array[count($data_array) - 1], ',');
echo "<pre>";
print_r($data_array);
?>