<?php
$societyname = $_POST['societyname'];
$address = $_POST['address'];
$password = $_POST['password'];
$state = $_POST['state'];
$city = $_POST['city'];
$houses = $_POST['houses'];


if(!empty($societyname) || !empty($address) || !empty($password) || !empty($state) || !empty($city) || !empty($houses)) {
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

// For valid address
function invalidaddress($address){
    $result;
    if(!preg_match("/^[a-zA-Z0-9,() ]+$/", $address)){
       $result = true; 
    }
    else{
        $result = false;
    }
    return $result;
   }

   if (invalidaddress($address) !== false) {
    
    echo '<script>alert("please enter correct address");</script>';
    
    exit();
}

// For valid city
function invalidcity($city){
    $result;
    if(!preg_match("/^[a-zA-Z0-9 ]+$/", $city)){
       $result = true; 
    }
    else{
        $result = false;
    }
    return $result;
   }

   if (invalidcity($city) !== false) {
    
    echo '<script>alert("please enter correct city name");</script>';
    
    exit();
}

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
       $SELECT = "SELECT societyname FROM society WHERE societyname = ? LIMIT 1";
       $INSERT = "INSERT INTO society (societyname, password, address, city, state, houses) VALUES(?,?,?,?,?,?)";

       //prepare statement
       $stmt = $conn->prepare($SELECT);
       $stmt->bind_param("s", $societyname);
       $stmt->execute();
       $stmt->bind_result($societyname);
       $stmt->store_result();
       $rnum = $stmt->num_rows;

       if($rnum==0){
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("sssssi", $societyname, $password, $address, $city, $state, $houses);
          $stmt->execute();
          echo '<script>alert("New record inserted successfully");</script>';
          header("location: login.php");
       }
       else{
        echo '<script>alert("This society already exists");</script>';
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