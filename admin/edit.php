<?php include("../includes/header.php"); ?>

<?php
	$con = mysqli_connect("localhost","jmcknight12","YQKyWQRZCSdm4eS","jmcknight12_2025");
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>

<div class="jumbotron clearfix">
	<h1>Edit Characters</h1>
	<p class="lead">Allows users to update and delete characters from the database.</p>
</div>

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

<?php
    $charID = $_GET['id'];
    if(!isset($charID)){
        $result = mysqli_query($con, "SELECT * FROM jmc_characters LIMIT 1") or die (mysql_error());
        while($row = mysqli_fetch_array($result)){
            $charID = $row['cid'];
        }
    }

    if(isset($_POST['submit']) && $validateSuccess == 1){
        $newFname = $_POST['fname'];
        $newLname = $_POST['lname'];
        $newDesc = $_POST['description'];

        $sql = "UPDATE jmc_characters SET
        jmc_fname=\"$newFname\",
        jmc_lname=\"$newLname\",
        jmc_description=\"$newDesc\"
        WHERE cid=$charID";

        $x = mysqli_query($con, $sql) or die(mysqli_error($con));
    }

    $result2 = mysqli_query($con, "SELECT * FROM jmc_characters WHERE cid=$charID");

    while($row = mysqli_fetch_array($result2)){
        $thisFname = $row['jmc_fname'];
        $thisLname = $row['jmc_lname'];
        $thisDescription = $row['jmc_description'];
        $thisID = $row['cid'];
    }
?>

<div class="d-flex row justify-content-between">
    <!-- onsubmit="return false;" -->
    <!-- onsubmit="event.preventDefault();" -->
    <form id="myform" name="myform" method="post" class="col-sm-8" action="">
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" class="form-control" value="<?php echo $thisFname; ?>">
            <?php
                if($fNameValidationMessage){
                    echo "<div class=\"alert alert-info mt-1\">$fNameValidationMessage</div>";
                }
            ?>
        </div>
        <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" class="form-control" value="<?php echo $thisLname; ?>">
            <?php
                if($lNameValidationMessage){
                    echo "<div class=\"alert alert-info mt-1\">$lNameValidationMessage</div>";
                }
            ?>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control"><?php echo $thisDescription; ?></textarea>
            <?php
                if($descriptionValidationMessage){
                    echo "<div class=\"alert alert-info mt-1\">$descriptionValidationMessage</div>";
                }
            ?>
        </div>
        <div class="d-flex">
            <div class="form-group">
                <label for="submit"></label>
                <input type="submit" name="submit" class="btn btn-info" value="Edit Character">
            </div>
            <div class="form-group">
                <label for="delete">&nbsp;</label>
                <input type="submit" name="delete" class="btn btn-danger" value="Delete Character" onclick="return  confirm('Are you sure you wish to delete this record?')">
            </div>
        </div>
        <?php
            if($validateSuccess == 1){
                echo "<div class=\"alert alert-success mt-5\"><p>Character has been successfully updated.</p></div>";
            }
        ?>
        <?php
            if(isset($_POST['delete'])){
                mysqli_query($con, "DELETE FROM jmc_characters WHERE cid='$charID'") or die(mysqli_error($con));
                echo "<script>location.href=\"edit.php\"</script>";
                echo "<div class=\"alert alert-danger mt-5\"><p>Character has been successfully deleted.</p></div>";
            }
        ?>
    </form>
    
    <div class="col-sm-3">
        <?php
        	$result = mysqli_query($con, "SELECT * FROM jmc_characters") or die(mysqli_error($con));
            echo "<div class=\"card p-3\">";
            echo "\t<h4>Character</h4>";
            while($row = mysqli_fetch_array($result)){
                $thisFname = $row['jmc_fname'];
                $thisLname = $row['jmc_lname'];
                $thisID = $row['cid'];

                if($thisID == $charID){
                    $editLinks = "\n<a href=\"edit.php?id=$thisID\" class=\"link-secondary\">". $thisFname. " " .$thisLname . "</a><br />";
                }else{
                    $editLinks = "\n<a href=\"edit.php?id=$thisID\">". $thisFname. " " .$thisLname . "</a><br />";
                }

                echo $editLinks;
            }
            echo "</div>";
        ?>
    </div>
</div>

<?php include("../includes/footer.php"); ?>