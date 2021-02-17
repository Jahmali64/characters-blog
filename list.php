<?php include("includes/header.php"); ?>

<div class="jumbotron clearfix">
	<h1>List Characters</h1>
	<p class="lead">List of all the characters in the database.</p>
</div>

<?php
	$con = mysqli_connect("localhost","jmcknight12","YQKyWQRZCSdm4eS","jmcknight12_2025");
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// reading from a DB: SELECT
	// * means to retrieve all the fields; can use "field1, field2,etc") instead
	$result = mysqli_query($con, "SELECT * FROM jmc_characters") or die(mysqli_error($con));

	while($row = mysqli_fetch_array($result)){
		echo "<div class=\"card mb-3\">";
		echo "\n\t<p class=\"card-head pl-3 mb-0 mt-3\"><b>" .$row['jmc_fname']. " " .$row['jmc_lname']. "</b></p>";
		echo "\n\t<p class=\"card-body p-3\">" .$row['jmc_description']. "</p>";
		echo "\n\t<a href=\"admin/edit.php?id=".$row['cid']."\" class=\"link-secondary ml-auto px-3 mb-3\">Edit</a>";
		echo "</div>";
	}
?>

<?php include("includes/footer.php"); ?>