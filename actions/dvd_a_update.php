<?php 

require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
   <title >Update Book Book</title>
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
   $id = $_POST['id'];

  $sql = "UPDATE dvd SET dvd_title = '$dvd_title', img = '$img', director_id = '$director_id', ASIN = '$ASIN', description = '$description', release_date = '$release_date', production_id = '$production_id', status = '$status' WHERE dvd_id = '$id'" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../dvd_update.php?book_id=" .$id."'><button type='button' class='btn btn-success'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button' class='btn btn-success'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>
</body>
</html>