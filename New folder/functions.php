<?php
require 'function.php';

$conn = mysqli_connect("localhost", "root", "", "website-restaurant");

function query($query) {
    global $conn;
    $result = mysql_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>