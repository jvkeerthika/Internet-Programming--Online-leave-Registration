<?php
include "db.php";
$name=$_POST['name'];
$mno=$_POST['mno'];
$rno=$_POST['rno'];
$dob=$_POST['dob'];
$dept=$_POST['dept'];
$email=$_POST['email'];


$sql = "INSERT INTO home (name,mno,rno,dob,dept,email)
VALUES ('$name', '$dob','$rno','$mno','$dept','$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$dol=$_POST['dol'];
$doa=$_POST['doa'];
$adr=$_POST['adr'];
$tol=$_POST['tol'];
$toa=$_POST['toa'];
$rfl=$_POST['rfl'];
$sql = "INSERT INTO student (dol,doa,adr,tol,toa,rfl)
VALUES ('$dol', '$doa','$adr','$tol','$toa','$rfl')";

header("Location: tracking.php");
?>