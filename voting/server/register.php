<?php


include('connect.php');

$username = $_POST['username'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$password = $_POST['password'];
$std = $_POST['std'];
$dob = $_POST['dob'];
$prnNumber = $_POST['prnNumber'];
$course = $_POST['course'];


/* $sql = " INSERT INTO `userdata` ( `username`, `mobile`, `email`, `password`, `standard`, `DOB`, `PRN`, `Course`, `status`, `votes`) VALUES ( `$username`,`$phoneno`,`$email`,`$password`,`$std`,`$dob`,$prnNumber,`$course`,0,0)";
 */

$sql2 = " INSERT INTO `userdata` (`id`, `username`, `mobile`, `email`, `password`, `standard`, `DOB`, `PRN`, `Course`, `status`, `votes`) VALUES ('', '$username', '$phoneno', '$email', '$password', '$std', '$dob', '$prnNumber', '$course', '0', '0') ";
$result = mysqli_query($con, $sql2);



if ($result) {
    echo ' <script>
    alert("Registration succesfull " );
    window.location="../";
    </script>';
}

?>