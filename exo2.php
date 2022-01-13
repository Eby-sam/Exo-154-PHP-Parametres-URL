<?php

if (!isset($_GET["iteration"])) {
    header('Location: index.php?error=1');
}

$iteration = intval($_GET['iteration']);

if ($iteration > 1000){
    $iteration = 1000;
}
elseif ($iteration <= 0){
    $iteration = 1;
}

for ($i = 0; $i < $iteration; $i++){
    echo "<a href='exo2.php?iteration=$i'> Lien $i </a><br>";
}
