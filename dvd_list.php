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

if ($_GET['dvd_id']) {
   $id = $_GET['dvd_id'];

   $sql = "SELECT dvd_title,img,ASIN,description,release_date,director_name,director_surname, production_name, status.status FROM dvd
		INNER JOIN director ON dvd.director_id = director.director_id
		INNER JOIN production_studio ON dvd.production_id = production_studio.production_id
		INNER JOIN status ON status.status_id = dvd.status
		WHERE dvd_id = $id" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>
<div class="container">
  <div class="card" style="width: 18rem;">
    <img src="<?php echo $data['img'] ?>" class="card-img-top">
  <div class="card-body">
               <h5 class="card-title"><?php echo $data['dvd_title'] ?></h5>
  </div>
           <ul class="list-group list-group-flush">
               <li class="list-group-item"><b>Director </b><?php echo $data['director_name'], ' ', $data['director_surname'] ?></li>
               <li class="list-group-item"><b>ASIN </b>
               <?php echo $data['ASIN'] ?></li>
           <li class="list-group-item"><b>Description </b>
               <?php echo $data['description'] ?></li>
            <li class="list-group-item"><b>Release Date </b><?php echo $data['release_date'] ?></li>
            <li class="list-group-item"><b>Production Studio </b><?php echo $data['production_name'] ?></li>
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