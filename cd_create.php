<html>
<head>
   <title>Code Review 10  |  Add CD</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
   <h2>Add CD</h2>

   <form action="actions/cd_a_create.php" method= "post">
    <div class="form-group">
               <label>CD Name</label>
               <input class="form-control" class="form-control" type="text" name="cd_name"  placeholder="CD Name" />
</div>
<div class="form-group">
               <label>Image Link</label>
               <input class="form-control"
                type="text" name= "img" placeholder="URL" />
</div>
<div class="form-group">
               <label>Artist ID</label>
               <input class="form-control" type="text"  name="artist_id" placeholder ="See reference below" />
</div>
<div class="form-group">
               <label>ISRC</label>
               <input class="form-control" type="text"  name="ISRC" placeholder ="ISRC" />
</div>
<div class="form-group">
               <label>Short Description</label>
               <input class="form-control" type="text"  name="description" placeholder ="Description" />
</div>
<div class="form-group">
               <label>First Released Date</label>
               <input class="form-control" type="date"  name="release_date" placeholder ="0000-00-00" />
</div>
<div class="form-group">
               <label>Studio ID</label>
               <input class="form-control" type="text"  name="studio_id" placeholder ="See reference below" />
</div>
<div class="form-group">
               <label>Status</label>
               <input class="form-control" type="text"  name="status" placeholder ="Status" />
               <small id="statusHelp" class="form-text text-muted">0=Available, 1=Reserved</small>
</div>
<div class="form-group">
               <button type='submit' class='btn btn-success'>Add CD</button>
               <a href= "index.php"><button type='button' class='btn btn-success'>Back</button></a>
     </div>
   </form>
</div>
<div class="container">
  <div class="row">
    <div class="col">
<table class="table table-striped table-success">
    <h2>Artist Reference</h2>
       <thead>
           <tr>
               <th>Artist ID</th>
               <th>Name</th>
           </tr>
       </thead>
       <tbody>
        <?php
        require_once 'actions/db_connect.php';
           $sql = "SELECT * from artist";
          $result = $connect->query($sql);
                      if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['artist_id']."</td>
                       <td>" .$row['artist_name']."</td>
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
    <h2>Studio Reference</h2>
       <thead>
           <tr>
               <th>Studio ID</th>
               <th>Name</th>
               <th>Address</th>
               <th>Size</th>
           </tr>
       </thead>
       <tbody>
        <?php
           $sql = "SELECT * from record_studio";
          $result = $connect->query($sql);
             $connect->close();

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['record_studio_id']."</td>
                       <td>" .$row['studio_name']."</td>
                       <td>" .$row['studio_address']."</td>
                       <td>" .$row['studio_size']."</td>
                       <td>
                           <a href='cdplist.php?record_studio_id=" .$row['record_studio_id']."'><button type='button' class='btn btn-success'>Show All Media</button></a>
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
</body>
</html>