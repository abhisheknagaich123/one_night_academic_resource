

<?php
require('connection.php');
require('function.php');
if (isset($_SESSION['user_id'])) {
   //  echo "Welcome, User ID: <br>" . $_SESSION['user_id'];
   //  // Add your logged-in user content here
   //        echo '<br><a href="logout.php">Logout</a>';
}
else{
   echo "";
   echo "<script>alert('Please Login With username or password.');
    location.href='registration.php';</script>";

}
$now = time(); 
      
if($now > $_SESSION['expire']) { 
    session_destroy(); 
    echo "<p align='center'>Session has been destroyed!!"; 
    header("Location: registration.php");   
} 
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>ONAR Admin</title>
      <link rel="icon" type="image/x-icon" href="favicon_io/favicon-16x16.png">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <meta http-equiv="refresh" content="10">  -->

      
   </head>
   <body  >
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default" >
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="categories.php" > Subject Categories Master</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="Subject_Info.php" > Add Subject Data </a>
                  </li>
                 
                  
              
              
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
              
                  <a class="navbar-brand" href="index.php"><img src="favicon_io/favicon.ico" alt="Logo" style="height: 38px;"></a>

                 
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
            
            <div class="header-menu">
               

    <div class="user-area dropdown float-right">
        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "Welcome 🤝" . $_SESSION['user_id'];?></a>
        
        <div class="user-menu dropdown-menu">
            <a class="nav-link" href="Logout.php"><i class="fa fa-power-off"></i>Logout</a>
        </div>
    </div>
</div>

            </div>
         </header>