
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://localhost/CampusRecruitment/img/favicon.ico">

  <title> Hr Dashboard | Campus Recruitment</title>

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/CampusRecruitment/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://localhost/CampusRecruitment/css/bootstrap.min.cssnarrow-jumbotron.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    
    <?php include 'header.php';?>

    <main role="main">
      <div class="alert alert-primary" role="alert">
        Hr Dashboard
      </div>
      <div class="row">
        <div class="col-lg-6">



          <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h4 class="card-title">Vacancy Information </h4>
              <h6 class="card-subtitle mb-2 text-muted">Vacancy Information </h6>
              <p class="card-text"></p>
              <a href="allvacancy.php" class="card-link">Vacancy Details</a>
            </div>
          </div>

        </div>


      <div class="col-lg-6">



          <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h4 class="card-title">Hr Information </h4>
              <h6 class="card-subtitle mb-2 text-muted">Hr Information </h6>
              <p class="card-text"></p>
              <a href="hr.php" class="card-link">Hr Details</a>
            </div>
          </div>

        </div>

   </div>
    </main>


    <?php include 'footer.php';?>


  </div> <!-- /container -->
</body>
</html>
