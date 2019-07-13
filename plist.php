<?php 

require_once 'actions/db_connect.php';
?>

<html>
<head>
   <title>Code Review 10  | Media List</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <table class="table table-striped table-success">
    <tbody>
<?php 

if ($_GET['publisher_id']) {
   $id = $_GET['publisher_id'];

   $sql = "SELECT title FROM book
		WHERE publisher_id = $id" ;
   $result = $connect->query($sql);

   if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo "<tr><td>". $row['title']. "</td></tr>";
                     }
                      } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
   $connect->close();
}

?>
</tbody>
</table>
</body>
</html>