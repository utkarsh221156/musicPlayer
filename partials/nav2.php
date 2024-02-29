<!-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Sign-up</title>
    </head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="train.php">Rail-Suvidha</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/login/status.php">Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login/pnr.php">PNR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login/ticket.php">Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login/help.php">Help</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="/login/contact.php">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login/about.php">About us</a>
      </li>
    </ul>
    <a class="nav-link" href="/login/login.php"> Logout </a>
  </div>
</nav> -->


<html>
    <head>
        <style>
body{
  padding-top: 120px;
  /* margin: 0; Remove default body margin */
    /* padding: 0; Remove default body padding */
    width: 100%; /* Set width to fill the viewport */
    height: 100vh; /* Set height to fill the viewport */
    background-image: url('back.jpg'); /* Specify the URL of the image */
    background-size: cover; /* Cover ensures the image covers the entire body */
    background-repeat: no-repeat; /* Prevent the image from repeating */
    background-position: center; /* Center the image */
}
.nav
{
    background-color: white;
    z-index: 9;
    padding-left: 50px;
    padding-right: 50px;
    display:flex;
    box-shadow: 0px 3px 65px 0px rgba(0,0,0,.15);
}
.nav_top
{
    position:fixed;
    top:0;
    right:0;
    left:0;
}
.logo
{
   padding-left: 0%;
    float:left;
    width: 50%;
}
.logo img
{   
    padding: 0%;
    width:30%;
    /* margin-left:10%; */
}
.nav_side
{
    float:right;
    width:45%;
    margin-top: 20px;
}
.nav_side a
{
    text-decoration: none;
    margin-right: 0px;
    margin-left:15px;
    margin-top: 20px;
    padding-top: 20px;
    padding-left: 15px;
    color: rgb(37, 0, 19);
    font-weight: bold;
    font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
    font-size: 18px;
    justify-content: center;
    align-items: center;
    align-content: center;
    text-align: center;
    
}
.nav_side a:hover
{
    color: rgb(253, 0, 84);
    transition: all 1s ease;
}
</style>
    </head>
<body>
<nav class="nav nav_top">
        <div class="logo">
            <img src="logo.jpg" height= "90">
        </div>
        <div class="nav_side">
            <a href="login.php">LOGIN</a>
            <a href="signup.php">SIGN-UP</a>
            <!-- <form class="form-inline my-2 my-lg-0"> -->
           <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
           <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    <!-- </form> -->
        </div>
    </nav>
</body>
</html>