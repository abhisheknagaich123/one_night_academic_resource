
<?php
require('top_inc.php');


// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
   //  echo "Welcome, User ID: <br>" . $_SESSION['user_id'];
   //  // Add your logged-in user content here
   //        echo '<br><a href="logout.php">Logout</a>';
}
// else{
//    echo "<script>alert('Please Login With username or password.'); location.href='registration.php';</script>";

// }
?>
<div class="content pb-0">
  <div class="orders">
     <div class="row">
      <div class="col-xl-12">
       <div class="card">
        <div class="card-body">
           <h4 class="box-title"><?php  echo "Welcome 🤝" . $_SESSION['user_id'];?> </h4>
        </div>
      </div>
      </div>
     </div>
  </div>
</div>
<?php
require('footer_inc.php');
?>