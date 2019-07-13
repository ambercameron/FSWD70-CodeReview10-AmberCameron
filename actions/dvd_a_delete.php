<?php 

require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
   <title >Delete DVD</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
if ($_POST) {
   $id = $_POST['dvd_id'];

   $sql = "DELETE FROM dvd WHERE dvd_id = $id";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../index.php'><button type='button' class='btn btn-success'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>
</body>
</html>