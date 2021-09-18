<?php   
    session_start();   
    include('connection.php');  
    $societyname = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $societyname = stripcslashes($societyname);  
        $password = stripcslashes($password);  
        $societyname = mysqli_real_escape_string($con, $societyname);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from society where societyname = '$societyname' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            $_SESSION['societyname']=$societyname; 
            echo "<h1><center> Login successful </center></h1>";  
            header('location: admin.php');
        }  
        else{  
            
            
            echo "<h1> Your society is not registered. Please signup.</h1>"; 
           
        }     
?>  