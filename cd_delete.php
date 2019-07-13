<?php 

require_once 'actions/db_connect.php';

if ($_GET['cd_id']) {
   $id = $_GET['cd_id'];

   $sql = "SELECT * FROM cd WHERE cd_id = $id" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete CD</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="alert alert-danger">
<h3 class="alert-heading">Do you really want to delete this CD?</h3><hr>
<form action ="actions/cd_a_delete.php" method="post">

   <input type="hidden" name= "cd_id" value="<?php echo $data['cd_id'] ?>" />
   <button type="submit" class="btn btn-danger">Yes, delete it!</button >
   <a href="index.php"><button type="button" class="btn btn-danger">No, go back!</button ></a>
</form>
</div>
</div>
</body>
</html>

<?php
}
?>