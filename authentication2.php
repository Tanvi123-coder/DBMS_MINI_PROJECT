<?php   
    session_start();   
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            $_SESSION['username']=$username; 
            echo "<h1><center> Login successful </center></h1>";  
            header('location: user.php');
        }  
        else{  
            
            
            echo "<h1> Your have not registered. Please signup.</h1>"; 
           
        }     
?>  