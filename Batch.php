<?php
// Check existence of id parameter before processing further
if(isset($_GET["batch_id"]) && !empty(trim($_GET["batch_id"]))){
    // Include config file
    require_once 'config.php';
    
    // Prepare a select statement
    $sql = "SELECT * FROM batch WHERE batch_id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["batch_id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["batch_name"];
                $address = $row["batch_desc"];
                $salary = $row["batch_code"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://localhost/CampusRecruitment/img/favicon.ico">

  <title> View vacancy | Campus Recruitment</title>

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/CampusRecruitment/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://localhost/CampusRecruitment/css/bootstrap.min.cssnarrow-jumbotron.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <?php include 'header.php';?>

    <main role="main">
  <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                       <label> Batch_Name</label>
                        <p class="form-control-static"><?php echo $row["batch_name"]; ?></p>
                    </div>
                    <div class="form-group">
                         <label> Batch_Desc</label>
                        <p class="form-control-static"><?php echo $row["batch_desc"]; ?></p>
                    </div>
                    <div class="form-group">
                         <label> Batch_Code</label>
                        <p class="form-control-static"><?php echo $row["batch_code"]; ?></p>
                    </div>
                    <p><a href="allbatch.php" class="btn btn-primary">Back</a></p>
                </div>
    </main>


    <?php include 'footer.php';?>


  </div> <!-- /container -->
</body>
</html>