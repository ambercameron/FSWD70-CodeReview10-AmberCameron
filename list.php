<?php 

require_once 'actions/db_connect.php';
?>

<html>
<head>
   <title>Code Review 10</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 

if ($_GET['book_id']) {
   $id = $_GET['book_id'];

   $sql = "SELECT title,img,ISBN,description,publish_date,author_name,author_surname, publisher_name, status.status FROM book
		INNER JOIN author ON book.author_id = author.author_id
		INNER JOIN publisher ON book.publisher_id = publisher.publisher_id
		INNER JOIN status ON status.status_id = book.status
		WHERE book_id = $id" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>
<div class="container">
  <div class="card" style="width: 18rem;">
    <img src="<?php echo $data['img'] ?>" class="card-img-top">
  <div class="card-body">
               <h5 class="card-title"><?php echo $data['title'] ?></h5>
  </div>
           <ul class="list-group list-group-flush">
               <li class="list-group-item"><b>Author </b><?php echo $data['author_name'], ' ', $data['author_surname'] ?></li>
               <li class="list-group-item"><b>ISBN </b>
               <?php echo $data['ISBN'] ?></li>
           <li class="list-group-item"><b>Description </b>
               <?php echo $data['description'] ?></li>
            <li class="list-group-item"><b>First Published Date </b><?php echo $data['publish_date'] ?></li>
            <li class="list-group-item"><b>Publisher </b><?php echo $data['publisher_name'] ?></li>
           <li class="list-group-item"><b>Availability </b>
               <?php echo $data['status'] ?></li>
           </ul>
           <div class="card-body">
               <a href= "index.php"><button class="btn btn-success" type="button" >Back</button ></a>
             </div>
           
      </div>
    </div>

<?php 
}
?>
</body>
</html>