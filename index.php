<?php
    echo "Hello World !";

    echo "<br><br>";

    $screen = "Hello World !";
    echo $screen;


echo "<br><br>";
    $table = ["Coca", "Café", "Sucre", "Orange"];
    echo $table[1];


echo "<br><br>";
for ($i = 0; $i < 3; $i++) {
    echo implode($table) . "<br>";
}
?>

<ul>
    <?php

    foreach ($table as $item) {
        echo $item . "<br>";
    }
    ?>
</ul>



