<?php
$Fname = $_POST['Fname'];
$Mname = $_POST['Mname'];
$Lname = $_POST['Lname'];
$societyname = $_POST['societyname'];
$building = $_POST['building'];
$apartment = $_POST['apartment'];
$mobile = $_POST['mobile'];
$count = $_POST['count'];
$username = $_POST['username'];
$password = $_POST['password'];



if(!empty($societyname) || !empty($username) || !empty($password) || !empty($Fname) || !empty($Mname) || !empty($Lname) || !empty($building) || !empty($apartment) || !empty($mobile) || !empty($count)) {
   $host = "localhost";
   $dbusername = "root";
   $dbpassword = "";
   $dbname = "project";
   
   $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
  

  // $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
  // For valid society name
   function invalidsocietyname($societyname){
    $result;
    if(!preg_match("/^[a-zA-Z0-9 ]+$/", $societyname)){
       $result = true; 
    }
    else{
        $result = false;
    }
    return $result;
   }

   if (invalidsocietyname($societyname) !== false) {
     
   
    echo '<script>alert("please enter correct society name");</script>';
    
    exit();
}

// For valid firstname
function invalidFname($Fname){
    $result;
    if(!preg_match("/^[a-zA-Z]+$/", $Fname)){
       $result = true; 
    }
    else{
        $result = false;
    }
    return $result;
   }

   if (invalidFname($Fname) !== false) {
    
    echo '<script>alert("please enter correct name");</script>';
    
    exit();
}

// For valid middlename
function invalidMname($Mname){
    $result;
    if(!preg_match("/^[a-zA-Z]+$/", $Mname)){
       $result = true; 
    }
    else{
        $result = false;
    }
    return $result;
   }

   if (invalidMname($Mname) !== false) {
    
    echo '<script>alert("please enter correct middle name");</script>';
    
    exit();
}

// For valid lastname
function invalidLname($Lname){
    $result;
    if(!preg_match("/^[a-zA-Z]+$/", $Lname)){
       $result = true; 
    }
    else{
        $result = false;
    }
    return $result;
   }

   if (invalidLname($Lname) !== false) {
    
    echo '<script>alert("please enter correct last name");</script>';
    
    exit();
}

 /* // For valid mobile number
function invalidmobile($mobile){
    $result;
    if(strlen($mobile)<10 || strlen($mobile>10)){
       $result = false; 
    }
    else{
        $result = true;
    }
    return $result;
   }

   if (invalidmobile($mobile) == true) {
    
    echo '<script>alert("please enter 10 digit mobile number");</script>';
    
    exit();
}
*/

  //for strong password
  function validpassword($password){
      $final;
      if(strlen($password) >= 6){
          if(!ctype_lower($password) && !ctype_upper($password)){
              $final = true;
          }
          else{
             $final = false;
          }
      }
      else{
        $final = false;
      }
      return $final;
  }

  if (validpassword($password) == false) {
    echo '<script>alert("Password should contain at least 1 upper case and 1 lower case letter. Also it should have more than 6 characters");</script>';
    exit();
  }

   if (mysqli_connect_error()){
       die('connect error('. mysqli_connect_errno().')'. mysqli_connect_error());
   }
   else{
       $SELECT = "SELECT username FROM users WHERE username = ? LIMIT 1";
       $INSERT = "INSERT INTO users (Fname, Mname, Lname, societyname, building, apartment, mobile, count, username, password) VALUES(?,?,?,?,?,?,?,?,?,?)";

       //prepare statement
       $stmt = $conn->prepare($SELECT);
       $stmt->bind_param("s", $username);
       $stmt->execute();
       $stmt->bind_result($username);
       $stmt->store_result();
       $rnum = $stmt->num_rows;

       if($rnum==0){
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssssiiiiss", $Fname, $Mname, $Lname, $societyname, $building, $apartment, $mobile, $count, $username, $password);
          $stmt->execute();
          echo '<script>alert("New record inserted successfully");</script>';
          header("location: login2.php");
       }
       else{
        echo '<script>alert("This username already exists");</script>';
       }
       $stmt->close();
       $conn->close();
   }


}
else{
    echo '<script>alert("All fields are required.");</script>';
    die();
}



?>