<?php 

require_once 'actions/db_connect.php';

if ($_GET['dvd_id']) {
   $id = $_GET['dvd_id'];

   $sql = "SELECT * FROM dvd WHERE dvd_id = 
   $id" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();



?>

<!DOCTYPE html>
<html>
<head>
   <title>Update DVD</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class='container'>
   <h2>Update DVD</h2>

   <form action="actions/dvd_a_update.php"  method="post">
       <div class="form-group">
               <label>DVD Name</label>
               <input class="form-control"  type="text" name="dvd_title"  placeholder="dvd Name" value="<?php echo $data['dvd_title'] ?>"  />
            </div>
           <div class="form-group">
               <label>Image Link</label>
               <input class="form-control"  type="text" name= "img" placeholder="URL" value ="<?php echo $data['img'] ?>" /></td >
           </div>
           <div class="form-group">
               <label>Director ID</label>
               <input class="form-control" type="text"  name="director_id" placeholder ="See reference below" value= "<?php echo $data['director_id'] ?>" />
           </div>
           <div class="form-group">
               <label>ASIN</label>
               <input class="form-control"  type="text"  name="ASIN" placeholder ="ASIN" value= "<?php echo $data['ASIN'] ?>" />
           </div>
           <div class="form-group">
               <label>Description</label>
               <input class="form-control" type="text"  name="description" placeholder ="Description" value= "<?php echo $data['description'] ?>" />
           </div>
           <div class="form-group">
               <label>Release Date</label>
               <input class="form-control" type="date"  name="release_date" placeholder ="00-00-0000" value= "<?php echo $data['release_date'] ?>" />
           </div>
           <div class="form-group">
               <label>Production_id ID</label>
               <input class="form-control" type="text"  name="production_id" placeholder ="See reference below" value= "<?php echo $data['production_id'] ?>" />
           </div>
           <div class="form-group">
               <label>Availability</label>
               <input class="form-control" type="text"  name="status" placeholder ="status" value= "<?php echo $data['status'] ?>" />
               <small id="statusHelp" class="form-text text-muted">0=Available, 1=Reserved</small>
           </div>
           <div class="form-group">
               <input class="form-control" type= "hidden" name= "id" value= "<?php echo $data['dvd_id']?>" />
               <button  class="btn btn-success" type= "submit">Save Changes</button>
               <a  href= "index.php"><button  class="btn btn-success" type="button" >Back</button ></a>
           </div>
   </form>

</div>
<div class="container">
  <div class="row">
    <div class="col">
<table class="table table-striped table-success">
    <h2>Director Reference</h2>
       <thead>
           <tr>
               <th>director ID</th>
               <th>First Name</th>
               <th>Surname</th>
           </tr>
       </thead>
       <tbody>
        <?php
           $sql = "SELECT * from director";
          $result = $connect->query($sql);
                      if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['director_id']."</td>
                       <td>" .$row['director_name']."</td>
                       <td>" .$row['director_surname']."</td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
     
       </tbody>
   </table>
<table>
    <h2>Production Studio Reference</h2>
       <thead>
           <tr>
               <th>Production Studio ID</th>
               <th>Name</th>
               <th>Address</th>
               <th>Size</th>
           </tr>
       </thead>
       <tbody>
        <?php
           $sql = "SELECT * from production_studio";
          $result = $connect->query($sql);
             $connect->close();

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['production_id']."</td>
                       <td>" .$row['production_name']."</td>
                       <td>" .$row['production_address']."</td>
                       <td>" .$row['production_size']."</td>
                       <td>
                           <a href='dvdplist.php?production_id=" .$row['production_id']."'><button type='button' class='btn btn-success'>Show All Media</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
     
       </tbody>
   </table>

</div>
</div>
</div>
</body >
</html >

<?php 
}
?>