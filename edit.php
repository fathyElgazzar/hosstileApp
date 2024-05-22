<?php
include "server.php";


if(isset($_GET['edit'])){
$id=$_GET['edit'];

$select="SELECT * FROM`product` WHERE `pid`=$id";
$run_select=mysqli_query($db,$select);

$array=mysqli_fetch_assoc($run_select);

$name=$array['pname'];
$price=$array['price'];
$img=$array['image'];
}

if(isset($_POST['update']))
{
    $img=$array['image'];
    $name=$_POST['name'];
    $price=$_POST['price'];

    if ($_FILES['image']['tmp_name']){
        $img=$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],"images/".$img);
    }
    $update="UPDATE `product` SET `pname` = '$name' , `price` = '$price' , `image` = '$img'
    WHERE `pid` = '$id'";
    $run=mysqli_query($db,$update);
    header("location:mainadmin.php");
}

?>

<html>
    <head>
        <title>Edit Products</title>
        <link rel="stylesheet" href="./styles/Register.css">
    </head>
    <body>
        <header>    
            <a href="./main.php"><img src="images/husstile-logo.avif" alt="hosstile logo" class="img"></a>
            <h1>Edit Supplements</h1>
        </header>
            <form  method="POST" enctype="multipart/form-data" >
            <div class="inp2">
                <div class="inp">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?php echo $name ?>">
                </div>
                <div class="inp">
                    <label for="email">Price</label>
                    <input type="text" id="email" name="price" value="<?php echo $price ?>">
                </div>
                <div class="inp">
                    <label for="pass">Image</label>
                    <input type="file" id="password" name="image" value="<?php echo "./images/",$img ?>"><br>
                    <center><img src="<?php echo "./images/", $img ?>" width="200px" ></center>
                </div>
                <div class="inp">
            <button type="submit" class="btn" name="update">Update</button>
            </div>
            </form>
    </body>
</html>
