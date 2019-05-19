<!--====================================
  Author : Kartikeya P Malimath
  ==================================-->

  <?php
include ('../database/db.php');
	session_start();

$usn = $_GET['usn'];
$dept= $_SESSION['search'];
$sem = $_SESSION['sem'];
$update = $_SESSION['update'];
echo $dept;
$sql = "UPDATE $dept SET $update = 'No Due' WHERE USN='$usn'";
mysqli_query($con,$sql);
if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}
header('Location: ../alttable.php?sem='.$sem.'&dept='.$dept);
?>