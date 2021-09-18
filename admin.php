<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="admin.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div id="main">
        <nav>
            <img src="logo.png" width="100" height="70" >
            <b>SocietyClub</b>
           
            <ul>
                <li> <a href="society.html" style="text-decoration:none;">Home</a> </li>
                <li> <a href="landingpage.html">Login</a> </li>
                <li> <a href="logout.php">Logout</a> </li>
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
     
 </section>
</body>
</html>