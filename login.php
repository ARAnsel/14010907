<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2> 
    <form class="loginn" >
       <div class="user" >

       <label for="login" >username</label><br>
        <input type="text" id="login" name="login"><br>
        
       </div>
       <div class="user" >

       <label for="pas" >password</label><br>
        <input type="text" id="pas" name="pas"><br>
       
       </div>
       <div class="but">
        <a id="submit" href="#">Submit</a>
        <div class="regis" >
            dont have an account?
            <a  onclick="document.location='register.php'" id="register" href="#">Register</a>

        </div>
       </div>

    </form>
    </div>
</body>