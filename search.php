<?php
	include("includes/header.php");
    $searchTerm = trim($_GET['searchTerm']);
?>

<div class="jumbotron clearfix">
	<h1>Search Characters</h1>
	<p class="lead">Searches through database and returns results from the database based on user input.</p>
</div>

<form id="myform" name="search" method="get" action="search.php">
    <div class="d-flex">
        <div class="form-group d-flex">
            <label for="searchTerm">Search Term:</label>
            <input type="text" name="searchTerm" class="form-control" value="<?php echo $searchTerm; ?>">
        </div>
        <div class="form-group">
            <label for="submit">&nbsp;</label>
            <input type="submit" name="submit" class="btn btn-info" value="Submit">
        </div>
    </div>
</form>

<?php
    $con = mysqli_connect("localhost","jmcknight12","YQKyWQRZCSdm4eS","jmcknight12_2025");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if($searchTerm != ""){
        $sql = "SELECT * FROM jmc_characters WHERE
        jmc_lname LIKE '$searchTerm'
        OR jmc_fname LIKE '$searchTerm'
        OR jmc_description LIKE '%$searchTerm%'";

        $result = mysqli_query($con, $sql) or die (mysqli_error($con));
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $fname = $row['jmc_fname'];
                $lname = $row['jmc_lname'];
                $description = nl2br($row['jmc_description']);
                $cid = $row['cid'];

                echo "\n<div class=\"well card mb-3 p-3\">";
                echo "\n\t<h3>$fname $lname</h3>";
                echo "\n\t<div class=\"description\">$description</div>";
                echo "\n\t<a href=\"admin/edit.php?id=".$row['cid']."\" class=\"link-secondary ml-auto px-3 mb-3\">Edit</a>";
                echo "\n</div>";
            }
        }else{
            echo "<div class=\"alert alert-warning\">No Results</div>";
        }
    }
?>

<?php include("includes/footer.php"); ?>