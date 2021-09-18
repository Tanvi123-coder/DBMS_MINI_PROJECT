<?php
include_once('crud2.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="admin.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da0c622736.js" crossorigin="anonymous"></script>

    <style>
        body{
            background:white;
        }
        nav{
            position: sticky;
        }
        label #cancel{
    top: 110px;
    position: fixed;
    }
    
    form{
        
        margin-left:350px;
      margin-right:350px;
       
    }
    section .panel{
        align: center;
    }
    .btn{
      
      padding: .3em 1.5em;
      
    }
    form div{
      margin-left: 5em;
      margin-right: 5em;
    }
    .tbl{
        margin-left:100px;
        margin-right:100px;
     
      margin-top:50px;
    }
    table .btnedit{
      color: blue;
      cursor: pointer;
      border: none;
    }
    table .btndelete{
      color: tomato;
      cursor: pointer;
      border: none;
    }
    </style>
    
    

</head>
<body>
<div id="main">
        <nav>
            <img src="logo.png" width="100" height="70" >
            <b>SocietyClub</b>
           
            <ul>
                <li> <a href="society.html" style="text-decoration:none;">Home</a> </li>
                <li> <a href="landingpage.html" style="text-decoration:none;">login</a> </li>
                <li> <a href="logout.php" style="text-decoration:none;">Logout</a> </li>
             </ul>
             
        </nav>
        
    </div>  
<input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
     <header>Controls</header>
     <ul>
     <li><a href="profile.php"> <i class="fas fa-link"></i>Profile</a></li>
         <li><a href="guests.php"> <i class="fas fa-calendar-week"></i>Guests</a></li>
         <li><a href="covid.php"> <i class="fas fa-question-circle"></i>Covid</a></li>
         <li><a href="usercomplain.php"> <i class="fas fa-envelope"></i>Complains</a></li>
     </ul>
 </div>
 <section class="panel">
 <form action="crud2.php" method="post" class="shadow bg-white">
 <div align=center>
  <h2 >Complain</h2>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="building name">Building Number</label>
      <input type="text" class="form-control" id="building" name="buildingno" autocomplete="off" required>
    </div>
    <div class="form-group col-md-6">
      <label for="Apartment number">Apartment number</label>
      <input type="text" class="form-control" id="apartment" name="aptno" autocomplete="off" required>
    </div>
  </div>
  <div class="form-group col-md-6">
      <label for="subject">Subject</label>
    
     <select id="subject" class="form-control" name="subject" required>
        <option selected hidden value="">Choose</option>   
        <option value="High Maintenance">High Maintenance</option>
        <option value="Parking Issue">Parking Issue</option>
        <option value="Currupt Committee members">Currupt Committee members</option>
        <option value="Safety Neglect">Safety Neglect</option>
        <option value="Incomplete Audits">Incomplete Audits</option>
        <option value="Nuisance caused by resident">Nuisance caused by resident</option>
        <option value="Water Shortage">Water Shortage</option>
        <option value="Electricity Issue">Electricity Issue</option>
        <option value="Other">Other</option>
      </select> 
    </div>
  <div class="form-group">
    <label for="complain">Complain</label>
    <textarea type="text" class="form-control" id="complain" name="complain" autocomplete="off">
    </textarea>
  </div>
  <div class="form-group">
  <label for="status">Status :</label>
  <input type="radio" id="Solved" name="status" value="Solved">
  <label for="male">Solved</label>
  <input type="radio" id="Not Solved" name="status" value="Not Solved">
  <label for="female">Not Solved</label><br>
  </div>
   <div align=center>
  <div class="btn">
  <button type="submit" class="btn btn-info" name="submit"  id="btn-info"> Save </button>
  </div></div>
  <br><br>
  
</form>


<div class="tbl">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">CId</th>
      <th scope="col">Building No.</th>
      <th scope="col">Apartment No.</th>
      <th scope="col">Subject</th>
      <th scope="col">Complain</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
  <form action="crud2.php" method="post">
  <?php 
  
  
  //coding for display users data
  $username = $_SESSION['username'];
  $selectquery = "SELECT * FROM complain where username='$username'";
  $query = mysqli_query($conn, $selectquery);

  
   

  //code to fetch data row by row using while loop
  while($result = mysqli_fetch_assoc($query)){
    ?> 
   <tr>
   <td> <?php echo $result['CId']; ?>  </td>
   <td> <?php echo $result['building']; ?>  </td>
   <td> <?php echo $result['apartment']; ?>  </td>
   <td> <?php echo $result['subject']; ?>  </td>
   <td> <?php echo $result['complain']; ?>  </td>
   <td> <?php echo $result['status']; ?>  </td>
   <td> <?php echo $result['date']; ?> </td>
   
   <td> <button class="fa fa-trash btndelete" name="delete" value="<?php echo $result['CId']; ?>" type="submit"></button> </td>
  
    </tr>
 

  <?php } ?>
  </form>
  </tbody>
</table>
</div>

  
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
   
  
 </section>
</body>
</html>