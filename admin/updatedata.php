<?php
require('top_inc.php');
$categories = '';
$Heading = '';

// $id = 15;

// $res = "select * from subject_info where id='$id'";
// $result = mysqli_query($con, $res);
// $row = mysqli_fetch_assoc($result);
$id ='';

if (isset($_GET['type']) && $_GET['type'] != '') {
	$type = get_safe_value($con, $_GET['type']);
	if ($type == 'update') {
		$id = get_safe_value($con, $_GET['id']);
		//     

		$res = "select * from subject_info where id='$id'";
		$result = mysqli_query($con, $res);
		$row = mysqli_fetch_assoc($result);
	}
}

if (isset($_POST['submit'])) {

	$categories_id = get_safe_value($con, $_POST['categories_id']);
	$heading = get_safe_value($con, $_POST['heading']);

	$description = get_safe_value($con, $_POST['description']);

	$sql = "UPDATE subject_info 
	SET heading = '$heading', status = '1', description = '$description'
	WHERE id = '$id'";


	if (mysqli_query($con, $sql)) {
		echo "New record created successfully";
		header('location:subject_info.php');

	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }

}

//$updated = mysqli_query($con, "select id,categories from categories order by categories asc");


?>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><strong>Update Categories</strong><small> Data</small></div>
					<form method="post" enctype="multipart/form-data">
						<div class="card-body card-block">
							<div class="form-group">
								<label for="categories" class=" form-control-label"> Subject Categories</label>

								

							<div class="form-group">
								<label for="categories" class="form-control-label">Heading</label>
								<input type="text" name="heading" placeholder="Enter Subject Heading"
									class="form-control"
									value="<?php echo isset($row['heading']) ? htmlspecialchars($row['heading']) : ''; ?>">
							</div>



							<div class="form-group">
								<label for="categories" class=" form-control-label">Subject Description</label>

							</div>
							<textarea name="description" placeholder="Enter the Description" rows="4" cols="50">
	<?php echo nl2br($row['description']); ?>
</textarea>





							<button id="payment-button" name="submit" type="submit"
								class="btn btn-lg btn-info btn-block">
								<span id="payment-button-amount">Submit</span>
							</button>
							<div class="field_error">

							</div>
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