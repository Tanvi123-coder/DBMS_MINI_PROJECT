
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
      margin-left: 100px;   
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
    h3{
      color: red;
    }
    .details{
      float: right;
      margin-right: 100px;
      margin-top: 50px;
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
                <li> <a href="landingpage.html" style="text-decoration:none;">Login</a> </li>
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
 <div class="heading" align=center>
  <h3> Covid Record</h3>
  </div>

<div class="tbl">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">UId</th>
      <th scope="col">Username</th>
      <th scope="col">Society Name</th>
      <th scope="col">Building No.</th>
      <th scope="col">Apartment No.</th>
      
      <th scope="col">Status</th>
      

    </tr>
  </thead>
  <tbody>
  <form action="crud.php" method="post">
  <?php 
  
  
  include_once('dbcon.php');
  
  $selectquery = "SELECT * FROM covid";
  $query = mysqli_query($con, $selectquery);

  //code for edit button
   

  //code to fetch data row by row using while loop
  while($result = mysqli_fetch_assoc($query)){
    ?> 
   <tr>
   <td> <?php echo $result['uid']; ?>  </td>
   <td> <?php echo $result['username']; ?>  </td>
   <td> <?php echo $result['societyname']; ?>  </td>
   <td> <?php echo $result['buildingno']; ?>  </td>
   <td> <?php echo $result['aptno']; ?>  </td>
   <td> <?php echo $result['status']; ?>  </td>
   
  
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