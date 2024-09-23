<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
    session_start();
    if (isset($_SESSION["error"])) {
      echo  "<div>". $_SESSION["error"] ."</div>";
    }

    if (isset($_SESSION["success"])) {
        echo  "<div>". $_SESSION["success"] ."</div>";
      }
    session_unset();
    ?>

<form action="./signup/signup.php" method="post">
    <input type="text" name="email" placeholder="email"> <br>
   
    <input type="text" name="password" placeholder="password" value="password" > <br>
    <input type="text" name="name" placeholder="name" value="Ibukun" ><br>
    <input type="submit" name="submit" value="Submit" >
</form>
<p>Already have an Account? <a href="/login">Login</a> </p>
</body>
</html>