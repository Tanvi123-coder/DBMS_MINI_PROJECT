<?php
session_start();
$conn = new mysqli("localhost", "root", "", "project") OR die("Error: " . mysqli_error($conn));


if(isset($_POST['submit'])) {
 
    if(!empty($_POST['fname']) || !empty($_POST['lname']) || !empty($_POST['arrival_date']) || !empty($_POST['month']) || !empty($_POST['year']) || !empty($_POST['purpose']) ) 
{  

    $fname = $_POST['fname'];
$lname = $_POST['lname'];
$arrival_date = $_POST['arrival_date'];
$month = $_POST['month'];
$year = $_POST['year'];
$purpose = $_POST['purpose'];
$username = $_SESSION['username'];
$query1 = "SELECT * from users where username='$username'";
$data1 =   mysqli_query($conn, $query1);
$result1 =  mysqli_fetch_assoc($data1);
$societyname =  $result1['societyname'];
$Fname =  $result1['Fname'];
$Lname =  $result1['Lname'];



    $iquery = "INSERT INTO guests(first, last , fname, lname, purpose, username, societyname, arrival_date, month, year) values(?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($iquery);
   $stmt->bind_param("sssssssisi", $Fname, $Lname, $fname, $lname, $purpose, $username, $societyname, $arrival_date, $month, $year);
        if($stmt->execute()){
            header("location:guests.php");
        }
             
        
        $stmt->close();
        $conn->close();
    }

   
header("location: guests.php");
}


?>