
<?php
require('top_inc.php');
$categories = '';
$Heading = '';


if (isset($_POST['submit'])) {

	$categories_id = get_safe_value($con, $_POST['categories_id']);
	$heading = get_safe_value($con, $_POST['heading']);

	$description = get_safe_value($con, $_POST['description']);

	$sql= "insert into subject_info(categories_id,heading,status,description) values('$categories_id','$heading','1','$description')";
	
	
	if (mysqli_query($con, $sql)) {
		echo "New record created successfully";
		header('location:subject_info.php');

	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
								<label for="categories" class=" form-control-label"> Subject Categories</label>
								<select class="form-control" name="categories_id">
									<option>Select Subject Category </option>
									<?php
									$res = mysqli_query($con, "select id,categories from categories order by categories asc");
									while ($row = mysqli_fetch_assoc($res)) {
										if ($row['id'] == $categories_id) {
											echo "<option selected value=" . $row['id'] . ">" . $row['categories'] . "</option>";
										} else {
											echo "<option value=" . $row['id'] . ">" . $row['categories'] . "</option>";
										}
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="categories" class=" form-control-label">Subject Heading</label>
								<input type="text" name="heading" placeholder="Enter Subject Heading"
									class="form-control" required value="<?php echo $Heading ?>">
							</div>


							<div class="form-group">
								<label for="categories" class=" form-control-label" >Subject Description</label>

							</div>
							<textarea  name="description" placeholder="Enter the Description"  rows="4" cols="50">

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