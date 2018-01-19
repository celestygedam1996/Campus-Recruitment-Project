
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://localhost/CampusRecruitment/img/favicon.ico">

  <title>      Vacancy Details  | Campus Recruitment</title>

  <!-- Bootstrap core CSS -->
    <link href="http://localhost/food/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/food/css/bootstrap.min.cssnarrow-jumbotron.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <?php include 'header.php';?>

        <main role="main">

            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Vacancy Details</h2>
                        <a href="add_vacancy.php" class="btn btn-success pull-right">Add New Vacancy</a>
                    </div>
                    <?php
                     // Include config file
                   
                    require_once 'config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM vacancy";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Sr No</th>";
                                        echo "<th> Vacancy Name</th>";
                                        echo "<th> Vacancy Description</th>";
                                        echo "<th> Vacancy Type</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['vacancy_id'] . "</td>";
                                        echo "<td>" . $row['vacancy_name'] . "</td>";
                                        echo "<td>" . $row['vacancy_desc'] . "</td>";
                                        echo "<td>" . $row['vacancy_type'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='vacancy.php?vacancy_id=". $row['vacancy_id'] ."' title='View Record' data-toggle='tooltip'>View | </a>";
                                            echo "<a href='Vacancy_edit.php?vacancy_id=". $row['vacancy_id'] ."' title='Update Record' data-toggle='tooltip'> Edit |</a>";
                                            echo "<a href='vacancy_delete.php?vacancy_id=". $row['vacancy_id'] ."' title='Delete Record' data-toggle='tooltip'> Delete </a>";
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
