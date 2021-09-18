<?php
session_start();
$conn = new mysqli("localhost", "root", "", "project") OR die("Error: " . mysqli_error($conn));


if(isset($_POST['submit'])) {
 
    if(!empty($_POST['buildingno']) || !empty($_POST['aptno']) || !empty($_POST['subject']) || !empty($_POST['complain']) || !empty($_POST['status'])  ) 
{  

    $buildingno = $_POST['buildingno'];
$aptno = $_POST['aptno'];
$subject = $_POST['subject'];
$complain = $_POST['complain'];
$status = $_POST['status'];
$username = $_SESSION['username'];
$query1 = "SELECT * from users where username='$username'";
$data1 =   mysqli_query($conn, $query1);
$result1 =  mysqli_fetch_assoc($data1);
$societyname =  $result1['societyname'];




    $iquery = "INSERT INTO complain(username, societyname, buildingno, aptno, subject, complain, status) values(?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($iquery);
   $stmt->bind_param("ssiisss", $username, $societyname, $buildingno, $aptno, $subject, $complain, $status);
        if($stmt->execute()){
            header("location:guests.php");
        }
             
        
        $stmt->close();
        $conn->close();
    }

   
header("location: guests.php");
}


?>