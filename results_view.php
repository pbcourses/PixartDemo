<?php
// Do not cache results
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.


$forestID = $_GET["F"];
$numberOfTrees = $_GET["K"];

$query = "F=" . urlencode($forestID) . "&K=" . urlencode($numberOfTrees);
$json = file_get_contents('http://www.fedro.org/pixart/service.php?' . $query);
$results = json_decode($json, true);	// Decode as array
	
?>
<div align="center">
	<h3> Areas Search Results </h3>


<table border="1">
	<thead>
		<th>Area</th>
		<th>First Vertex</th>
		<th>Second Vertex</th>
	</thead>
<?php
$count = 0;
foreach($results as $area) {
	$count += 1;
	$firstVertex = $area[0];
	$secondVertex = $area[1];
?>
<tr>
	<td><?= $count ?></td>
	<td> (<?= $firstVertex[0] ?> , <?= $firstVertex[1] ?>) </td>
	<td> (<?= $secondVertex[0] ?> , <?= $secondVertex[1] ?>) </td>
</tr>
<?php
}
?>

</table>
</div>