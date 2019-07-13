<?php 

require_once 'db_connect.php';
?>

<html>
<head>
   <title>Code Review 10  |  Add DVD</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 

if ($_POST) {
   $dvd_title = $_POST['dvd_title'];
   $img = $_POST['img'];
   $director_id = $_POST[ 'director_id'];
   $ASIN = $_POST[ 'ASIN'];
   $description = $_POST['description'];
   $release_date = $_POST['release_date'];
   $production_id = $_POST['production_id'];
   $status = $_POST['status'];


   $sql = "INSERT INTO dvd (dvd_title, img, director_id, ASIN, description, release_date, production_id, status) VALUES ('$dvd_title', '$img', '$director_id', '$ASIN', '$description', '$release_date', '$production_id', '$status')";
    if($connect->query($sql) === TRUE) {
       echo "<div class='container'><div class='alert alert-success' role='alert'><h4 class='alert-heading'>Success!!!</h4><p>New Record Added to Library</p><hr>" ;
       echo "<a href='../dvd_create.php'><button type='button' class='btn btn-success'>Back</button></a>";
        echo "<a href='../index.php'><button type='button' class='btn btn-success'>Home</button></a></div></div>";
   } else  {
       echo "<div class='container'><div class='alert alert-danger'><h4 class='alert-heading'>Error<h4><p> " . $sql . " " . $connect->connect_error . "</p></div></div>";
   }

   $connect->close();
}

?>
</body>
</html>