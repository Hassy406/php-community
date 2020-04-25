<?php

session_start();
if(isset($_SESSION['current_user'])){
    $user = $_SESSION['current_user'];
    echo "<center><h1>Hello " . $user . "</h1>";
    echo "<button class='btn btn-success'><a style='color: white;' href='./index.php'>Logout</a></button></center>";
}else{
    echo "<script>
    window.location = './index.php';
    </script>";
}


 include './db.php';
 $conn = open();
 $query = "select * from hassy";
 $result = mysqli_query($conn, $query);
 echo "<center><table border=1>
 <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Number<th>
 </tr>";
 while(list($id, $name, $email, $pass, $num) = mysqli_fetch_row($result)){
     echo "<tr>
     <td>$id</td>
     <td>$name</td>
     <td>$num</td>";
 }
 echo "</table></center>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>User: <?php echo $user; ?></title>
</head>
<body>
   
</body>
</html>


<?php 
session_destroy();
?>
