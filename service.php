<?php

$forestID = $_GET["F"];
$numberOfTrees = $_GET["K"];
$areas = [];

if (($forestID == "foo") && ($numberOfTrees == 3)) {
	$area1 = [[1, 1], [4, 4]];
	$area2 = [[2, 3], [9, 11]];
	
	$areas = [$area1, $area2];
}

echo json_encode($areas, JSON_NUMERIC_CHECK);
?>