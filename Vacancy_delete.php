<?php
// Process delete operation after confirmation
if(isset($_POST["vacancy_id"]) && !empty($_POST["vacancy_id"])){
// Include config file
  require_once 'config.php';

// Prepare a delete statement
  $sql = "DELETE FROM vacancy WHERE vacancy_id = ?";

  if($stmt = mysqli_prepare($link, $sql)){
// Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "i", $param_id);

// Set parameters
    $param_id = trim($_POST["vacancy_id"]);

// Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
// Records deleted successfully. Redirect to landing page
      header("location: allvacancy.php");
      exit();
    } else{
      echo "Oops! Something went wrong. Please try again later.";
    }
  }

// Close statement
  mysqli_stmt_close($stmt);

// Close connection
  mysqli_close($link);
} else{
// Check existence of id parameter
  if(empty(trim($_GET["vacancy_id"]))){
// URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
  }
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

  <title> Delete Batch | Campus Recruitment</title>

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/CampusRecruitment/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

  <!-- Custom styles for this template -->
  <link href="http://localhost/CampusRecruitment/css/bootstrap.min.cssnarrow-jumbotron.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <?php include 'header.php';?>

    <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Record</h1>
                    </div>

                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="vacancy_id" value="<?php echo trim($_GET["vacancy_id"]); ?>"/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="allvacancy.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div> 


    <?php include 'footer.php';?>


  </div> <!-- /container -->
</body>
</html>