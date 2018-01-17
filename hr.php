<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://localhost/CampusRecruitment/img/favicon.ico">

  <title> Hr Details | Campus Recruitment</title>

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
  Hr Details
</div>
      <form>
  <div class="form-group">
    <label for="exampleInputhrname">Hr name</label>
    <input type="hrname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter hrname">

  </div>


   <div class="form-group">
    <label for="exampleInputhrname">Hr  email</label>
    <input type="hrname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>

   <div class="form-group">
    <label for="exampleInputhrname">Company name </label>
    <input type="hrname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company name">

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

   
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <a  href="hr_dashboard.php" type="submit" class="btn btn-primary">Update</a>
</form>

      </main>


<?php include 'footer.php';?>
     

    </div> <!-- /container -->
  </body>
  </html>
