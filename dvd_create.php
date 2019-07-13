<html>
<head>
   <title>Code Review 10  |  Add DVD</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
   <h2>Add DVD</h2>

   <form action="actions/dvd_a_create.php" method= "post">
           <div class="form-group">
               <label>DVD Name</label>
               <input class="form-control" type="text" name="dvd_title"  placeholder="DVD Title" />
           </div>     
           <div class="form-group">
               <label>Image Link</label>
               <input class="form-control" type="text" name= "img" placeholder="URL" />
           </div>
           <div class="form-group">
               <label>Director ID</label>
               <input class="form-control" type="text"  name="director_id" placeholder ="See reference below" />
           </div>
           <div class="form-group">
               <label>ASIN</label>
               <input class="form-control" type="text"  name="ASIN" placeholder ="ASIN" />
           </div>
           <div class="form-group">
               <label>Short Description</label>
               <input class="form-control" type="text"  name="description" placeholder ="Description" />
           </div>
           <div class="form-group">
               <label>Release Date</label>
               <input class="form-control" type="date"  name="release_date" placeholder ="0000-00-00" />
           </div>
           <div class="form-group">
               <label>Production Studio ID</label>
               <input class="form-control" type="text"  name="production_id" placeholder ="See reference below" />
           </div>
           <div class="form-group">
               <label>Status</label>
               <input class="form-control" type="text"  name="status" placeholder ="Status" />
               <small id="statusHelp" class="form-text text-muted">0=Available, 1=Reserved</small>
           </div>
           <div class="form-group">
               <button type ="submit" class='btn btn-success'>Add DVD</button>
               <a href= "index.php"><button type="button" class='btn btn-success'>Back</button></a>
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
               <th>Author ID</th>
               <th>First Name</th>
               <th>Surname</th>
           </tr>
       </thead>
       <tbody>
        <?php
        require_once 'actions/db_connect.php';
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
</div>
 <div class="col">
<table class="table table-striped table-success">
    <h2>Production Studio Reference</h2>
       <thead>
           <tr>
               <th>Publisher ID</th>
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
                   </tr>";
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           echo $row['production_id'];
            ?>
     
       </tbody>
   </table>
 </div>
</div>
</div>
</body>
</html>