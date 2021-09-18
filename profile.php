
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
     <link rel="stylesheet" href="profile.css">
   <style>
        nav{
            position: sticky;
        }
        label #cancel{
    top: 110px;
    position: fixed;
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

 
    <div class="card-container">
    
         <div class="upper-container">
             <div class="image-container">
                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQD6o4MplGmPR_M3Z_mSwecQ3cKlpZzaJOyhQ&usqp=CAU" alt="">
             </div>
         </div>

         <div class="lower-container">

         <?php 
  
  
  //coding for display users data
  session_start();
  include_once ('connection.php');
  $username = $_SESSION['username'];
  $selectquery = "SELECT * FROM users where username='$username'";
  $query = mysqli_query($con, $selectquery);

  
   

  //code to fetch data row by row using while loop
  while($result = mysqli_fetch_assoc($query)){
    ?>

          <div>
              <h3><?php echo $result['Fname']; ?>
              <?php echo $result['Lname']; ?>
            </h3>
            <br>
              <h4>Society: <?php echo $result['societyname']; ?></h4>
          </div>
          <div>
              <p> Building: <?php echo $result['building']; ?>  &nbsp;&nbsp; Apartment: <?php echo $result['apartment']; ?> <br>
             Mobile No.:  <?php echo $result['mobile']; ?> <br> Family members: <?php echo $result['count']; ?> </p>
          </div>
          <div>
              <a href="editprofile.php?id=<?php echo $result['id']; ?>" class="btn">Edit profile</a>
          </div>
         </div>

    </div>
 
    <?php } ?>
 </section>
 
</body>
</html>








