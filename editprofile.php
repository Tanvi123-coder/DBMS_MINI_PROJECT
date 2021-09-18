 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da0c622736.js" crossorigin="anonymous"></script>

    <title>Profile</title>
    <style>
    form{
        margin-top:100px;
      margin-left:250px;
      margin-right:250px;
    }
    .btn{
        
      padding: .3em 1.5em;
      
    }
    form div{
      margin-left: 5em;
      margin-right: 5em;
    }
    
   
    </style>
    
    
  </head>
  <body>
 

  <form action="" method="post" class="shadow bg-white">
  <br>
  <h2 style="margin-left:450px">Profile</h2>
  <br> 
  <div class="form-row">

  <?php


$conn = new mysqli("localhost", "root", "", "project") OR die("Error: " . mysqli_error($conn));
$UId = $_GET['id'];
$selectquery = "SELECT * FROM users WHERE id=$UId";
$query = mysqli_query($conn, $selectquery);
$result =mysqli_fetch_assoc($query);
if(isset($_POST['submit'])) {
    
 $UId = $_GET['id'];
$building = $_POST['building'];
$apartment = $_POST['apartment'];
$societyname = $_POST['societyname'];
$mobile = $_POST['mobile'];
$count = $_POST['count'];
$Fname = $_POST['Fname'];
$Mname = $_POST['Mname'];
$Lname = $_POST['Lname'];
$password = $_POST['password'];

    $updatequery = "UPDATE users SET id=$UId, building=$building, apartment=$apartment, societyname='$societyname', mobile=$mobile, count=$count, Fname='$Fname',Mname='$Mname',Lname='$Lname',password='$password' WHERE id=$UId";

    $query = mysqli_query($conn,$updatequery);
    
    if($query){
        ?> 
        
    <?php header("location: profile.php"); }else{
         
      ?>
    <?php 
    
} 
}else{
    ?>
    <?php

}
    
?>

<div class="form-group col-md-2">
      <label for="Society Name">First Name</label>
      <input type="text" class="form-control" id="Fname" name="Fname" value="<?php echo $result['Fname']; ?>" autocomplete="off" required>
    </div>
    <div class="form-group col-md-2">
      <label for="middle name">Middle Name</label>
      <input type="text" class="form-control" id="Mname" name="Mname" value="<?php echo $result['Mname']; ?>"autocomplete="off" required>
    </div>
    <div class="form-group col-md-2">
      <label for="last name">Last Name</label>
      <input type="text" class="form-control" id="Lname" name="Lname" value="<?php echo $result['Lname']; ?>"autocomplete="off" required>
    </div>

  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="societyname">Society Name</label>
    <input type="text" class="form-control" id="societyname" name="societyname" value="<?php echo $result['societyname']; ?>"  autocomplete="off" required>
  </div>
  <div class="form-group col-md-4">
      <label for="password">Password</label>
      <input type="text" class="form-control" id="password" name="password" value="<?php echo $result['password']; ?>"autocomplete="off"required>
    </div>
    </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="building name">Building Number</label>
      <input type="text" class="form-control" id="building" name="building" value="<?php echo $result['building']; ?>" autocomplete="off" required>
    </div>
    <div class="form-group col-md-4">
      <label for="Apartment number">Apartment number</label>
      <input type="text" class="form-control" id="apartment" name="apartment" value="<?php echo $result['apartment']; ?>" autocomplete="off" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="mobile">Mobile Number</label>
      <input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo $result['mobile']; ?>"autocomplete="off" required>
    <!--  <span id="message" style="color:red;"></span> -->
    </div>

    <div class="form-group col-md-4">
      <label for="count">Count</label>
      <input type="text" class="form-control" id="count" name="count" value="<?php echo $result['count']; ?>"placeholder="Number of Family Members" autocomplete="off" required>
    </div>
 </div>
 

  
   <div align=center>
  <div class="btn"> <a href="profile.php">
  <button type="submit" class="btn btn-info" name="submit"  id="btn-info" value="update"> Update </button></a>
  </div></div>
  <br><br>
  
</form>




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
   
  
  </body>
</html>