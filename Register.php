<?php 
include 'server.php';

if(isset($_POST['register'])){
    $username=mysqli_real_escape_string($db, $_POST['un']);
    $email=mysqli_real_escape_string($db, $_POST['em']);
    $password1=mysqli_real_escape_string($db, $_POST['psw1']);
    $password2=mysqli_real_escape_string($db, $_POST['psw2']);
    if (empty($username)) {
        array_push($error, "Username is required");
    }
    if (empty($email)){
        array_push($error, "Email is required");
    }
    if (empty($password1)){
        array_push($error, "Password is required");
    }
    if (empty($password2))
    array_push($error, "Confirm password is required");
    if ($password1!=$password2){
        array_push($error, "Passwords do not match");
    }
    if(count($error)==0)
    $lowercase=preg_match('@[a-z]@', $password1);
    $uppercase=preg_match('@[A-Z]@', $password1);
    $numbers=preg_match('@[0-9]@', $password1);
    $characters=preg_match('@[^/w]@', $password1); 
    if($lowercase < 1 || $uppercase < 1 || $numbers < 1 || $characters < 1)
    {echo "password must contain at least 1 uppercase, lowercase, number, and special character";}
    else{
        $sql="INSERT INTO user Values (NULL , '$username', '$email', '$password1')"; 
        mysqli_query($db, $sql);
        header('location: login.php');
        }

}

?>

<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="./styles/Register.css">
    </head>
    <body>
        <header>    
            <a href="./main.php"><img src="images/husstile-logo.avif" alt="hosstile logo" class="img"></a>
            <h1>Sign Up</h1>
        </header>
            <form  method="POST" >
            <div class="inp2">
                <div class="inp">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="un" required>
                </div>
                <div class="inp">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="em" required>
                </div>
                <div class="inp">
                    <label for="pass">Password</label>
                    <input type="password" id="password" name="psw1" required>
                </div>
                <div class="inp">
                <label for="pass_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="psw2" required>
                </div>
            <button type="submit" class="btn" name="register">Create account</button>
            </div>
            </form>
    </body>
</html>