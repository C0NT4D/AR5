<?php
$data = array(
    array('name' => 'Neville Marks ', 'age' => 77),
    array('name' => 'Laurel Buckner', 'age' => 73),
    array('name' => 'Zia Bullock', 'age' => 25 ),
    array('name' => 'Lillith Herring', 'age' => 62 ),
    array('name' => 'Aileen Kemp', 'age' => 53 ),
    array('name' => 'Alfonso Mcfarland', 'age' => 40 ),
);

echo "<pre>";
print_r($data);

foreach ($data as $usuario) {
    if ($usuario['age'] >= 35 && $usuario['age'] <= 65) {
        echo $usuario['name'] . " is " . $usuario['age'] . " years old" . "";
        echo "<br>";
    }
}

echo "</pre>";
?>