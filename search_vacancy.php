<?php
  $conn = mysqli_connect("localhost", "root", "", "campus");  

  $keyword = "";  
  $queryCondition = "";
  if(!empty($_POST["keyword"])) {
    $keyword = $_POST["keyword"];
    $wordsAry = explode(" ", $keyword);
    $wordsCount = count($wordsAry);
    $queryCondition = " WHERE ";
    for($i=0;$i<$wordsCount;$i++) {
      $queryCondition .= "vacancy_name LIKE '%" . $wordsAry[$i] . "%' OR vacancy_desc LIKE '%" . $wordsAry[$i] . "%'";
      if($i!=$wordsCount-1) {
        $queryCondition .= " OR ";
      }
    }
  }
  $orderby = " ORDER BY vacancy_id desc"; 
  $sql = "SELECT * FROM vacancy " . $queryCondition;
  $result = mysqli_query($conn,$sql); 
?>
<?php 
  function highlightKeywords($text, $keyword) {
    $wordsAry = explode(" ", $keyword);
    $wordsCount = count($wordsAry);
    
    for($i=0;$i<$wordsCount;$i++) {
      $highlighted_text = "<span style='font-weight:bold;'>$wordsAry[$i]</span>";
      $text = str_ireplace($wordsAry[$i], $highlighted_text, $text);
    }

    return $text;
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

  <title>Search Vacancy | Campus Recruitment</title>

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/CampusRecruitment/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://localhost/CampusRecruitment/css/bootstrap.min.cssnarrow-jumbotron.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <?php include 'header.php';?>

    <main role="main">

      <div class="jumbotron">
        <h1 class="display-3"> Search Upcoming Vacancy  </h1>
        <h3> Pool campuses for efficient Campus Hiring. Reach the best talent in campuses through our pooled campus drives to make sure the right mix of profiles is available for your hiring requirement.</h3>
      </div>

     <form name="frmSearch" method="post" action="">
       <div class="form-group">
          <label for="exampleInputhrname"> Search  Vacancy</label>
          <input type="text" name="keyword" value="<?php echo $keyword; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter Search Keyword">
          <br/>
           <input type="submit" name="go" class="btn btn-primary pull-right" value="Search">

        </div>

      </form> 

      <?php 
        while($row = mysqli_fetch_assoc($result)) { 
        $new_title = $row["vacancy_name"];
        if(!empty($_POST["keyword"])) {
          $new_title = highlightKeywords($row["vacancy_name"],$_POST["keyword"]);
        }
        $new_description = $row["vacancy_desc"];
        if(!empty($_POST["keyword"])) {
          $new_description = highlightKeywords($row["vacancy_desc"],$_POST["keyword"]);
        }
      ?>

      <h3> <?php echo $new_title; ?></h3>
      <p><?php echo $new_description; ?></p>
      
      <?php } ?>


    </main>


    <?php include 'footer.php';?>


  </div> <!-- /container -->
</body>
</html>
