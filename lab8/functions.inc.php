<?php

function outputOrderRow($file, $title, $quantity, $price)
{
    $src = "images/books/tinysquare/" . $file;
    $new_price="$".number_format($quantity,"2",".","");
    $amount = "$".number_format($quantity * $price,"2",".","");
    echo "<tr>";
    echo "<td><img src='$src'></td>";
    echo "<td>$title</td>";
    echo "<td>$quantity</td>";
    echo "<td>$new_price</td>";
    echo "<td>$amount</td>";
    echo "</tr>";
}

?>