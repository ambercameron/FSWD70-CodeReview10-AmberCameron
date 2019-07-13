<?php 

require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
   <title >Update Book</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
if ($_POST) {
   $title = $_POST['title'];
   $img = $_POST['img'];
   $author_id = $_POST[ 'author_id'];
   $ISBN = $_POST[ 'ISBN'];
   $description = $_POST['description'];
   $publish_date = $_POST['publish_date'];
   $publisher_id = $_POST['publisher_id'];
   $status = $_POST['status'];
   $id = $_POST['id'];

  $sql = "UPDATE book SET title = '$title', img = '$img', author_id = '$author_id', ISBN = '$ISBN', description = '$description', publish_date = '$publish_date', publisher_id = '$publisher_id', status = '$status' WHERE book_id = '$id'" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?book_id=" .$id."'><button type='button' class='btn btn-success'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button' class='btn btn-success'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>
</body>
</html>