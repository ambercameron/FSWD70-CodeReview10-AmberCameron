<?php 

require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
   <title >Update CD</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
if ($_POST) {
   $title = $_POST['title'];
   $img = $_POST['img'];
   $artist_id = $_POST[ 'artist_id'];
   $ISRC = $_POST[ 'ISRC'];
   $description = $_POST['description'];
   $release_date = $_POST['release_date'];
   $studio_id = $_POST['studio_id'];
   $status = $_POST['status'];
   $id = $_POST['id'];

  $sql = "UPDATE cd SET title = '$title', img = '$img', artist_id = '$artist_id', ISRC = '$ISRC', description = '$description', release_date = '$release_date', studio_id = '$studio_id', status = '$status' WHERE cd_id = '$id'" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?cd_id=" .$id."'><button type='button' class='btn btn-success'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button' class='btn btn-success'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>
</body>
</html>