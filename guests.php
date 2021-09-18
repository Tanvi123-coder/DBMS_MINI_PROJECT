<?php
include_once('list.php');
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
        
        margin-left:250px;
      margin-right:250px;
       
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
 <form action="list.php" method="post" class="shadow bg-white">
 <div align=center>
  <h2 >Guests</h2>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="first name">First Name</label>
      <input type="text" class="form-control" id="fname" name="fname" autocomplete="off" required>
    </div>
    <div class="form-group col-md-4">
      <label for="last number">Last name</label>
      <input type="text" class="form-control" id="lname" name="lname" autocomplete="off" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="year">Arrival Date</label>
      <input type="text" class="form-control" id="arrival_date" name="arrival_date" autocomplete="off" required>
    </div>
  <div class="form-group col-md-4">
      <label for="month">Month</label>
    
     <select id="month" class="form-control" name="month" required>
        <option selected hidden value="">Choose</option>   
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
      </select> 
    </div>
    <div class="form-group col-md-4">
      <label for="year">Year</label>
      <input type="text" class="form-control" id="year" name="year" required>
    </div>
  </div>
    <div class="form-group col-md-6">
      <label for="purpose">Purpose</label>
      <input type="text" class="form-control" id="purpose" name="purpose" autocomplete="off" required>
     
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
      <th scope="col">GId</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Arrival Date</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">Purpose</th>
    </tr>
  </thead>
  <tbody>
  <form action="list.php" method="post">
  <?php 
  
  
  //coding for display users data
  $username = $_SESSION['username'];
  $selectquery = "SELECT * FROM guests where username='$username'";
  $query = mysqli_query($conn, $selectquery);

  
   

  //code to fetch data row by row using while loop
  while($result = mysqli_fetch_assoc($query)){
    ?> 
   <tr>
   <td> <?php echo $result['GId']; ?>  </td>
   <td> <?php echo $result['fname']; ?>  </td>
   <td> <?php echo $result['lname']; ?>  </td>
   <td> <?php echo $result['arrival_date']; ?>  </td>
   <td> <?php echo $result['month']; ?>  </td>
   <td> <?php echo $result['year']; ?>  </td>
   <td> <?php echo $result['purpose']; ?> </td>
  
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