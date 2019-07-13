<?php 

require_once 'actions/db_connect.php';

if ($_GET['book_id']) {
   $id = $_GET['book_id'];

   $sql = "SELECT * FROM book WHERE book_id = 
   $id" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();



?>

<!DOCTYPE html>
<html>
<head>
   <title>Update Book</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class='container'>
   <h2>Update Book</h2> 

   <form action="actions/a_update.php"  method="post">
       <div class="form-group">
               <label>Book Name</label>
               <input class="form-control" type="text" name="title"  placeholder="Book Name" value="<?php echo $data['title'] ?>"  />
           </div>
           <div class="form-group">
               <label>Image Link</label>
               <input class="form-control" type="text" name= "img" placeholder="URL" value ="<?php echo $data['img'] ?>" />
           </div>
           <div class="form-group">        
               <label>Author ID</label>
               <input class="form-control" type="text"  name="author_id" placeholder ="See reference below" value= "<?php echo $data['author_id'] ?>" />
               </div>
            <div class="form-group">
               <label>ISBN</label>
               <input class="form-control" type="text"  name="ISBN" placeholder ="ISBN" value= "<?php echo $data['ISBN'] ?>" />
           </div>
           <div class="form-group">
               <label>Description</label>
               <input class="form-control" type="text"  name="description" placeholder ="Description" value= "<?php echo $data['description'] ?>" />
          </div>
          <div class="form-group">           
               <label>First Publish Date</label>
               <input class="form-control" type="date"  name="publish_date" placeholder ="00-00-0000" value= "<?php echo $data['publish_date'] ?>" />
          </div>
          <div class="form-group">
               <label>Publisher ID</label>
               <input class="form-control" type="text"  name="publisher_id" placeholder ="See reference below" value= "<?php echo $data['publisher_id'] ?>" />
          </div>
           <div class="form-group">  
               <label>Availability</label>
               <input class="form-control" type="text"  name="status" placeholder ="Status" value= "<?php echo $data['status'] ?>" />
               <small id="statusHelp" class="form-text text-muted">0=Available, 1=Reserved</small>
             </div>
           <div class="form-group">   
               <input type= "hidden" name= "id" value= "<?php echo $data['book_id']?>" />
               <button  type= "submit" class="btn btn-success">Save Changes</button>
               <a  href= "index.php"><button  type="button" class="btn btn-success">Back</button ></a>
             </div>
   </form>

</div>
<div class="container">
  <div class="row">
    <div class="col">
<table class="table table-striped table-success">
    <h2>Author Reference</h2>
       <thead>
           
               <th>Author ID</th>
               <th>First Name</th>
               <th>Surname</th>
           </tr>
       </thead>
       <tbody>
        <?php
           $sql = "SELECT * from author";
          $result = $connect->query($sql);
                      if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['author_id']."</td>
                       <td>" .$row['author_name']."</td>
                       <td>" .$row['author_surname']."</td>
                   </tr>" ;
               }
           } else  {
               echo  "<td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
     
       </tbody>
   </table>
</div>
 <div class="col">
<table class="table table-striped table-success">
    <h2>Publisher Reference</h2>
       <thead>
           
               <th>Publisher ID</th>
               <th>Name</th>
               <th>Address</th>
               <th>Size</th>
           </tr>
       </thead>
       <tbody>
        <?php
           $sql = "SELECT * from publisher";
          $result = $connect->query($sql);
             $connect->close();

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['publisher_id']."</td>
                       <td>" .$row['publisher_name']."</td>
                       <td>" .$row['publisher_address']."</td>
                       <td>" .$row['publisher_size']."</td>
                       <td>
                           <a href='plist.php?publisher_id=" .$row['publisher_id']."'><button type='button' class='btn btn-success'>Show All Media</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<td colspan='5'><center>No Data Avaliable</center></td></tr>";
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