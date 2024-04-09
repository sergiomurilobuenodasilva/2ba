<?php
for ($x = 0;$x <= 10; $x++){
    if ($x == 3)
    break;
echo "<br>";
echo "#####################";
echo "<br>";
    echo "o numero é: $x <br>";
}

echo "<br>";
echo "###################";
echo "<br>";

for ($x = 0;$x <= 10; $x++){
    if ($x == 3) continue;
    echo "o numero é $x <br";
}

$i = 1;
while ($i < 6) {
    echo "O numero é: $i <br>";
    $i++;
}

echo "<br>";
echo "####################";
echo "<br>";

while ($i < 26){
    echo "O numero é: $i <br>";
    $i++;
}

?>



