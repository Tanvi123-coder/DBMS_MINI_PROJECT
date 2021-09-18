<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="form-box">
    
       <h1>Login here</h1>
       <form name="f1" action="authentication2.php" onsubmit = "return validation()" method="post">
        <div class="input-box">
            <i class="fa fa-building"></i>
            <input type="text" placeholder="Username" id="user" name="username" autocomplete="off"/>
        </div>
        <div class="input-box">
            <i class="fa fa-key"></i>
            <input type="password" placeholder="Password" name="password" id="pass" />
            <span class="eye" onclick=" myFunction()">
            <i id="hide1" class="fa fa-eye"></i>
            <i id="hide2" class="fa fa-eye-slash"></i>
            </span>
        </div>
     <div>
     <button type="submit" id="btn" class="login-btn" name="login" value="login">Login</button>
     </div>
     
        </form>
        <a href="usersignup.php"> <button class="login-btn"> Not registered ? signup here !</button></a>
    </div>
    
    <script>
        function myFunction(){
            var x = document.getElementById("pass");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>

<script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  


</body>
</html> 