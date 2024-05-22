<?php 
include('server.php');

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['psw1'];

    if(empty($email) || empty($pass)){
        echo "data is required";
    }
    else{
        $select="SELECT * FROM `user` WHERE `email`='$email' ";
        $runSelect=mysqli_query($db,$select);

        $rows=mysqli_num_rows($runSelect);

    if($rows>0){
        $fetech=mysqli_fetch_assoc($runSelect);
        $fetech_id=$fetech['id'];
        $_SESSION['id']=$fetech_id;
        header('location:./main.php');
    }else{
        echo "wrong email";
    }
}
}


?>
<html>
    <head>
        <title>Google</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/login.css">
    </head>
    <body>
    <header>
        <img src="images/husstile-logo.avif" alt="hosstile logo" class="img">
        <h1>Login</h1>
    </header>
    <form method="POST">
        <div class="inp2">
        <div class="inp">
            <label>Email</label>
            <input type="text" name="email" required>
        </div>
        <div class="inp">
            <label>Password</label>
            <input type="password" name="psw1" required>
        </div>
        
        <div class="inp">
        <button type="submit" name="login" class="btn">Sign in</button>
        </div>
        </div>
        <p>Not yet a member?<a href="Register.php"> Sign up</a></p>
    </form>
    </body>
</html>