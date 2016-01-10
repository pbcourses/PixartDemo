<!DOCTYPE html>
<html>
	<head>
		<title>Trees</title>
	</head>
	
	<body>
		<h2>Search a forest for rectangular areas containing a given number of trees.</h2>
		<h4>Areas will have at least two trees at their vertexes.</h4>
		<form id="query" name="query" method="get" action="">
			<table>
				<tr><td>
					Forest ID: <input type="text" maxlength="50" name="F" id="F"> <- <i>foo</i><br>
				</td></tr>
				<tr><td>
					Number of trees: <input type="text" maxlength="10" name="K" id="K"> <- <i>3</i><br>
				</td></tr>
				<tr><td>
					<input type="button" value="Search" onclick="updateResultsView();">
				</td></tr>
			</table>
		</form>
		
		<iframe id="results_view" src="results_view.php">
		</iframe>
		
		<script type="text/javascript">
			function updateResultsView() {
				$forestID = document.getElementById('F').value;
				$numberOfTrees = document.getElementById('K').value;
				$query = "F=" + encodeURIComponent($forestID) + "&K=" + encodeURIComponent($numberOfTrees);
				document.getElementById('results_view').src = "results_view.php?" + $query;
			};
		</script>
	</body>
</html>