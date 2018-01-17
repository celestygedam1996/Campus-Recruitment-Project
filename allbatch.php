
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://localhost/CampusRecruitment/img/favicon.ico">

  <title>      Batch Details  | Campus Recruitment</title>

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/CampusRecruitment/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="http://localhost/CampusRecruitment/css/bootstrap.min.cssnarrow-jumbotron.css" rel="stylesheet">
</head>

<body>

  
    <?php include 'header.php';?>

     <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Batch Details</h2>
                        <a href="add_batch.php" class="btn btn-success pull-right">Add New Batch</a>
                    </div>
                    <?php
                     // Include config file
                   
                    require_once 'config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM batch";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Sr No</th>";
                                        echo "<th> Batch Name</th>";
                                        echo "<th> Batch Description</th>";
                                        echo "<th> Batch Code</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['batch_id'] . "</td>";
                                        echo "<td>" . $row['batch_name'] . "</td>";
                                        echo "<td>" . $row['batch_desc'] . "</td>";
                                        echo "<td>" . $row['batch_code'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='batch.php?batch_id=". $row['batch_id'] ."' title='View Record' data-toggle='tooltip'>View | </a>";
                                            echo "<a href='batch_edit.php?batch_id=". $row['batch_id'] ."' title='Update Record' data-toggle='tooltip'>Edit | </a>";
                                            echo "<a href='batch_delete.php?batch_id=". $row['batch_id'] ."' title='Delete Record' data-toggle='tooltip'>Delete</a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>

    <?php include 'footer.php';?>


  </div> <!-- /container -->
</body>
</html>
