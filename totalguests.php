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
     <li><a href="profilelist.php"> <i class="fas fa-link"></i>Members</a></li>
         <li><a href="totalguests.php"> <i class="fas fa-calendar-week"></i>Guests</a></li>
         <li><a href="covidlist.php"> <i class="fas fa-question-circle"></i>Covid</a></li>
         <li><a href="admincomplain.php"> <i class="fas fa-envelope"></i>Complains</a></li>
     </ul>
 </div>
 <section class="panel">
 

<div class="tbl">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">GId</th>
      <th scope="col">Member Name</th>
      <th scope="col">Guest Name</th>
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
 
  $societyname = $_SESSION['societyname'];
  $selectquery = "SELECT * FROM guests where societyname='$societyname'";
  $query = mysqli_query($conn, $selectquery);

  
   

  //code to fetch data row by row using while loop
  while($result = mysqli_fetch_assoc($query)){
    ?> 
   <tr>
   <td> <?php echo $result['GId']; ?>  </td>
   <td> <?php echo $result['first']; ?> <?php echo $result['last']; ?>  </td>
   <td> <?php echo $result['fname']; ?> <?php echo $result['lname']; ?>  </td>
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