<?php
require('top_inc.php');
$categories='';
$msg='';

if(isset($_POST['submit'])){
	$categories=get_safe_value($con,$_POST['categories']);
	$res=mysqli_query($con,"select * from categories where categories='$categories'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$msg="Categories already exist";
		

	}
	else{
		 $file_name = $_FILES['image']['name'];
		 $tempname = $_FILES['image']['tmp_name'];
		 $folder = 'images/'.$file_name;
	 
		 if(move_uploaded_file($tempname, $folder)) {
			// echo "<h2>File uploaded successfully</h2>";
		 } else {
			 //echo "<h2>File not uploaded successfully</h2>";
		 } 

		     mysqli_query($con,"insert into categories(categories,status,subject_image) values('$categories','1','$file_name')");
		     header('location:categories.php');
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categories</label>
									<input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="<?php echo $categories?>">
								</div>
								<div class="form-group">
								<label for="categories" class=" form-control-label" >Image</label>
								<input type="file" name="image" class="form-control" >
							</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer_inc.php');
?>