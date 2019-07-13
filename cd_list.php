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

if ($_GET['cd_id']) {
   $id = $_GET['cd_id'];

   $sql = "SELECT title,img,ISRC,description,release_date,artist_name, studio_name, status.status FROM cd
		INNER JOIN artist ON cd.artist_id = artist.artist_id
		INNER JOIN record_studio ON record_studio_id = studio_id
		INNER JOIN status ON status.status_id = cd.status
		WHERE cd_id = $id" ;
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
               <li class="list-group-item"><b>Artist </b><?php echo $data['artist_name'] ?></li>
               <li class="list-group-item"><b>ISRC </b>
               <?php echo $data['ISRC'] ?></li>
           <li class="list-group-item"><b>Description </b>
               <?php echo $data['description'] ?></li>
            <li class="list-group-item"><b>Release Date </b><?php echo $data['release_date'] ?></li>
            <li class="list-group-item"><b>Recording Studio </b><?php echo $data['studio_name'] ?></li>
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