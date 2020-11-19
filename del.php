<?php
$id=$_GET['id'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab-13.mysql.database.azure.com', 'nuttarin@itflab-13', 'Nan312615', 'itflab', 3306);
$sql="DELETE FROM guestbook WHERE id='$id'";
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
