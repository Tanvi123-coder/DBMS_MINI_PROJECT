<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin Signup</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="society.css">
  </head>
  <body id="admin-signup">

  <div>
        <nav>
            <img src="logo.png" width="100" height="70" >
            <b>SocietyClub</b>
           
            <ul>
                <li> <a href="society.html" style="text-decoration:none;">Home</a> </li>
                <li> <a href="landingpage.php"  style="text-decoration:none;">Login</a> </li>
                <li> <a href="logout.php" style="text-decoration:none;">Logout</a> </li>
             </ul>
             
        </nav>
    
    </div>  

    <div class="signup">
    <form action="register.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="Society Name">First Name</label>
      <input type="text" class="form-control" id="Fname" name="Fname" autocomplete="off" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Middle Name</label>
      <input type="text" class="form-control" id="Mname" name="Mname" autocomplete="off" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" id="Lname" name="Lname" autocomplete="off" required>
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Society Name</label>
    <input type="text" class="form-control" id="societyname" name="societyname" autocomplete="off" required>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Building Number</label>
      <input type="text" class="form-control" id="building" name="building" autocomplete="off" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Apartment Number</label>
      <input type="text" class="form-control" id="apartment" name="apartment" autocomplete="off" required>
    </div>
    
  </div>
<div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputZip">Mobile Number</label>
      <input type="text" class="form-control" id="mobile" name="mobile" autocomplete="off" required>
      <span id="message" style="color:red;"></span>
    </div>

    <div class="form-group col-md-4">
      <label for="inputZip">Count</label>
      <input type="text" class="form-control" id="count" name="count" placeholder="Number of Family Members" autocomplete="off" required>
    </div>
 </div>

 <div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputZip">Username</label>
      <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
    </div>
     <br> <br> <br>
    <div class="form-group col-md-4">
      <label for="inputZip">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
 </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required >
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
</form>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

     

  </body>
</html>