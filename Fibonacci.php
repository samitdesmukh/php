<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$term = $_POST['term'];


$fibonacci = [];


if ($term >= 1) {
    $fibonacci[0] = 0; // First term
}
if ($term >= 2) {
    $fibonacci[1] = 1; // Second term
}
for ($i = 2; $i < $term; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}


echo "<h2>Fibonacci Series (up to $term terms):</h2>";
echo "<ul>";
for ($i = 0; $i < count($fibonacci); $i++) {
    echo "<li>" . $fibonacci[$i] . "</li>";
}
echo "</ul>";
}
?>
