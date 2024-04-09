<?php
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

var_dump($car);

echo "<br>";
echo "###################";
echo "<br>";

echo $car["model"];
echo "<br>";
echo $car["model"];
echo "<br>";
echo $car["model"];

echo "<br>";
echo "###################";
echo "<br>";

$car["Barto"] = "Pro William";

foreach ($car as $x => $y){
    echo "$x: $y <br>";
}

$cars = [0 => "Volvo",
         1 => "BMW",
         2 => "Toyota"];

echo "<br>";
echo $cars[0];
echo "<br>";
echo $cars[1];   

$myCar = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
];

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

echo "<br>";
echo "###################";
echo "<br>";

$car["years"] = 2024 - $car["year"];

foreach ($cars as $x => $y) {
    echo "$x: $y <br>";
}

?>
