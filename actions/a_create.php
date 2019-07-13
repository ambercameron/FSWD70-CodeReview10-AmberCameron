<?php 

require_once 'db_connect.php';
?>

<html>
<head>
   <title>Code Review 10  |  Add Book</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 

if ($_POST) {
   $book_name = $_POST['book_name'];
   $img = $_POST['img'];
   $author_id = $_POST[ 'author_id'];
   $ISBN = $_POST[ 'ISBN'];
   $description = $_POST['description'];
   $publish_date = $_POST['publish_date'];
   $publisher_id = $_POST['publisher_id'];
   $status = $_POST['status'];


   $sql = "INSERT INTO book (title, img, author_id, ISBN, description, publish_date, publisher_id, status) VALUES ('$book_name', '$img', '$author_id', '$ISBN', '$description', '$publish_date', '$publisher_id', '$status')";
    if($connect->query($sql) === TRUE) {
       echo "<div class='container'><div class='alert alert-success' role='alert'><h4 class='alert-heading'>Success!!!</h4><p>New Record Added to Library</p><hr>" ;
       echo "<a href='../create.php'><button type='button' class='btn btn-success'>Back</button></a>";
        echo "<a href='../index.php'><button type='button' class='btn btn-success'>Home</button></a></div></div>";
   } else  {
       echo "<div class='container'><div class='alert alert-danger'><h4 class='alert-heading'>Error<h4><p> " . $sql . " " . $connect->connect_error . "</p></div></div>";
   }

   $connect->close();
}

?>
</body>
</html>