<?php require_once 'actions/db_connect.php'; ?> 

<!DOCTYPE html>
<html>
<head>
   <title>Code Review 10</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br>
<div>
   <div class="container">
    <div class="row">
      <div class="col">
    <h2>Books</h2>
  </div>
  <div class="col">
    <a href= "create.php"><button type="button" class="btn btn-success" >Add Book</button></a>
  </div>
  </div>
</div>
   <table class="table table-striped table-success">
       <thead>
           <tr>
               <th scope="col">Title</th>
               <th scope="col">Author</th>
               <th scope="col">Availability</th>
           </tr>
       </thead>
       <tbody>
        <?php
           $sql = "SELECT book_id, title, author_name, author_surname, status.status from book\n". "INNER JOIN author ON author.author_id = book.author_id\n". "INNER JOIN status ON status.status_id = book.status";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['title']."</td>
                       <td>" .$row['author_name']." " .$row['author_surname']."</td>
                       <td>" .$row['status']."
                       <td>
                           <a href='list.php?book_id=" .$row['book_id']."'><button type='button' class='btn btn-success' >Show Media</button></a>
                           <a href='update.php?book_id=" .$row['book_id']."'><button type='button' class='btn btn-success'>Edit</button></a> 
                           <a href='delete.php?book_id=" .$row['book_id']."'><button type='button' class='btn btn-success'>Delete</button></a>
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
<br>
<div>
  <div class="container">
    <div class="row">
      <div class="col">
    <h2>CDs</h2>
  </div>
  <div class="col">
   <a href= "cd_create.php"><button type="button" class="btn btn-success">Add CD</button></a>
 </div>
</div>
</div>
   <table class="table table-striped table-success">
       <thead>
           <tr>
               <th>Title</th>
               <th>Artist</th>
               <th>Availability</th>
           </tr>
       </thead>
       <tbody>
        <?php
           $sql = "SELECT cd_id, title, artist_name, status.status from cd INNER JOIN artist ON artist.artist_id = cd.artist_id INNER JOIN status ON status.status_id = cd.status";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['title']."</td>
                       <td>" .$row['artist_name']."</td>
                       <td>" .$row['status']."
                       <td>
                           <a href='cd_list.php?cd_id=" .$row['cd_id']."'><button type='button' class='btn btn-success'>Show Media</button></a>
                           <a href='cd_update.php?cd_id=" .$row['cd_id']."'><button type='button' class='btn btn-success'>Edit</button></a> 
                           <a href='cd_delete.php?cd_id=" .$row['cd_id']."'><button type='button' class='btn btn-success'>Delete</button></a>
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
<br>
<div>
  <div class="container">
    <div class="row">
      <div class="col">
    <h2>DVDs</h2>
  </div>
  <div class="col">
   <a href= "dvd_create.php"><button type="button" class="btn btn-success" >Add DVD</button></a>
 </div>
 </div>
</div>
   <table class="table table-striped table-success">
       <thead>
           <tr>
               <th>Title</th>
               <th>Director</th>
               <th>Availability</th>
           </tr>
       </thead>
       <tbody>
        <?php
           $sql = "SELECT dvd_id, dvd_title, director_name, director_surname, status.status from dvd INNER JOIN director ON director.director_id = dvd.director_id INNER JOIN status ON status.status_id = dvd.status";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['dvd_title']."</td>
                       <td>" .$row['director_name']. " " .$row['director_surname']."</td>
                       <td>" .$row['status']."
                       <td>
                           <a href='dvd_list.php?dvd_id=" .$row['dvd_id']."'><button type='button' class='btn btn-success'>Show Media</button></a>
                           <a href='dvd_update.php?dvd_id=" .$row['dvd_id']."'><button type='button' class='btn btn-success'>Edit</button></a> 
                           <a href='dvd_delete.php?dvd_id=" .$row['dvd_id']."'><button type='button' class='btn btn-success'>Delete</button></a>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>