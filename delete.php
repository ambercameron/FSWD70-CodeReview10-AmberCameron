<?php 

require_once 'actions/db_connect.php';

if ($_GET['book_id']) {
   $id = $_GET['book_id'];

   $sql = "SELECT * FROM book WHERE book_id = $id" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete Book</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="alert alert-danger">
<h3 class="alert-heading">Do you really want to delete this Book?</h3><hr>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "book_id" value="<?php echo $data['book_id'] ?>" />
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