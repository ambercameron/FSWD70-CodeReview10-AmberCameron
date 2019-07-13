<?php 

require_once 'db_connect.php';
?>

<html>
<head>
   <title>Code Review 10  |  Add CD</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 

if ($_POST) {
   $cd_name = $_POST['cd_name'];
   $img = $_POST['img'];
   $artist_id = $_POST[ 'artist_id'];
   $ISRC = $_POST[ 'ISRC'];
   $description = $_POST['description'];
   $release_date = $_POST['release_date'];
   $studio_id = $_POST['studio_id'];
   $status = $_POST['status'];


   $sql = "INSERT INTO cd (title, img, artist_id, ISRC, description, release_date, studio_id, status) VALUES ('$cd_name', '$img', '$artist_id', '$ISRC', '$description', '$release_date', '$studio_id', '$status')";
    if($connect->query($sql) === TRUE) {
       echo "<div class='container'><div class='alert alert-success' role='alert'><h4 class='alert-heading'>Success!!!</h4><p>New Record Added to Library</p><hr>" ;
       echo "<a href='../cd_create.php'><button type='button' class='btn btn-success'>Back</button></a>";
        echo "<a href='../index.php'><button type='button' class='btn btn-success'>Home</button></a></div></div>";
   } else  {
       echo "<div class='container'><div class='alert alert-danger'><h4 class='alert-heading'>Error<h4><p> " . $sql . " " . $connect->connect_error . "</p></div></div>";
   }

   $connect->close();
}

?>
</body>
</html>