<?php
// <!-- Group 12 ISTA 498 -->
include 'DatabaseAdaptor.php';
$theDBA = new DatabaseAdaptor();

if ( ( $_GET['tableName'] === "foodtbl" && is_string($_GET['substring'])) ) {
    echo json_encode($theDBA->getFood($_GET['substring']));
}
if ($_GET['tableName'] === "foodtb") {
    echo json_encode($theDBA->getOneFood($_GET['id']));
}
?>