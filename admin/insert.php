<?php include("../includes/header.php"); ?>

<?php
	$con = mysqli_connect("localhost","jmcknight12","YQKyWQRZCSdm4eS","jmcknight12_2025");
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>

<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$description = $_POST['description'];

	if(isset($_POST['submit'])){
		$validateSuccess = 1;
		$validFName = false;
		$validLName = false;

		//first name validation
		if(strlen($fname) <= 40){
            $validFName = true;
        }
        if($validFName == false){
            $fNameValidationMessage = "First name cannot exceed 40 characters.";
			$validateSuccess = 0;
        }
        if($fname == ""){
            $fNameValidationMessage = "First name is required.";
			$validateSuccess = 0;
        }
		//last name validation
		if(strlen($lname) <= 40){
            $validLName = true;
        }
        if($validLName == false){
            $lNameValidationMessage = "Last name cannot exceed 40 characters.";
			$validateSuccess = 0;
        }
        if($lname == ""){
            $lNameValidationMessage = "Last name is required.";
			$validateSuccess = 0;
        }
		//description validation
		if($description == ""){
            $descriptionValidationMessage = "Description is required.";
			$validateSuccess = 0;
        }
	}
?>

<div class="jumbotron clearfix">
	<h1>Insert Characters</h1>
	<p class="lead">Allows users to insert character data into the database.</p>
</div>

<form id="myform" name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<div class="form-group">
		<label for="fname">First Name:</label>
		<input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>">
		<?php
			if($fNameValidationMessage){
				echo "<div class=\"alert alert-info mt-1\">$fNameValidationMessage</div>";
			}
		?>
	</div>
	<div class="form-group">
		<label for="lname">Last Name:</label>
		<input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>">
		<?php
			if($lNameValidationMessage){
				echo "<div class=\"alert alert-info mt-1\">$lNameValidationMessage</div>";
			}
		?>
	</div>
	<div class="form-group">
		<label for="description">Description:</label>
		<textarea name="description" class="form-control"><?php echo $description; ?></textarea>
		<?php
			if($descriptionValidationMessage){
				echo "<div class=\"alert alert-info mt-1\">$descriptionValidationMessage</div>";
			}
		?>
	</div>
	<div class="form-group">
		<label for="submit"></label>
		<input type="submit" name="submit" class="btn btn-info" value="Add Character">
	</div>
	<?php
		if($validateSuccess == 1){
			mysqli_query($con, "INSERT INTO jmc_characters (jmc_fname,jmc_lname,jmc_description) VALUES ('$fname', '$lname', '$description')") or die(mysqli_error($con));
			echo "<div class=\"alert alert-success mt-5\"><p>Character has been successfully added to the database.</p></div>";
		}
	?>
</form>

<?php include("../includes/footer.php"); ?>