<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title> SignUp </title>
    </head>
<body>
<?php 
    $showAlert = false;
    $showError = false;
if(isset($_POST['submit'])){
    include 'partials/dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $contact = $_POST["contact"];
    $DOB = $_POST["DOB"];
    // $exists=false;
     if($password == $cpassword){
    $sql = "INSERT INTO signup
            VALUES('$username', '$password','$contact' , '$DOB');";
     $result = mysqli_query($conn,$sql);
            if($result){
                $showAlert = true;    
            }
     }
            else{  
        echo "Error, please cheack your Password ";
           }
}
?>
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
 ?>
 <?php require 'partials/nav2.php' ?>
<div class="container my-4">
     <h1 class="text-center">Create an Account</h1>
     <form action="signup.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword"> 
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
        <div class="form-group">
            <label for="contact">Mobile Number</label>
            <input type="number" class="form-control" id="contact" name="contact">
        </div>
        <div class="form-group">
            <label for="DOB">Date of Birth</label>
            <input type="date" class="form-control" id="DOB" name="DOB">
        </div>
         
        <input type="submit" name="submit" id="submit" value="Submit">
     </form>
    </div>
</body>
</html>