<?php
// Author: Zejun Li
include 'DatabaseAdaptor.php';
$theDBA = new DatabaseAdaptor();
if ($_GET['tableName'] === "foodtbl")
    echo json_encode($theDBA->getFood($_GET['substring']));
    ?>
