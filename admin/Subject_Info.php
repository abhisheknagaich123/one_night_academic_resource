<?php
require('top_inc.php');

// if(isset($_GET['type']) && $_GET['type']!=''){
// 	$type=get_safe_value($con,$_GET['type']);
// 	if($type=='status'){
// 		$operation=get_safe_value($con,$_GET['operation']);
// 		$id=get_safe_value($con,$_GET['id']);
// 		if($operation=='active'){
// 			$status='1';
// 		}else{
// 			$status='0';
// 		}
// 		$update_status_sql="update product set status='$status' where id='$id'";
// 		mysqli_query($con,$update_status_sql);
// 	}

// 	if($type=='delete'){
// 		$id=get_safe_value($con,$_GET['id']);
// 		$delete_sql="delete from product where id='$id'";
// 		$sql = "SELECT subject_info.*, categories.categories 
//         FROM subject_info 
//         JOIN categories ON subject_info.categories_id = categories.id 
//         WHERE subject_info.categories_id = '$id' 
//         ORDER BY subject_info.id DESC";
// 		mysqli_query($con,$sql);
// 	}
// }

$sql = "select subject_info.*,categories.categories from subject_info,categories where subject_info.categories_id=categories.id order by subject_info.id desc";
$res = mysqli_query($con, $sql);
?>
<div class="content pb-0">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form method="get" action="data.php">
						<h4 class="box-title">Subject </h4>
						<h4 class="box-link"><a href="manage_subject_data.php">Add Subject</a> </h4>
					  </div>
					   <div class="card-body--">
						<div class="table-stats order-table ov-h">
							<table class="table ">
								<thead>
									<tr>

										<th>ID</th>
										<th>Categories</th>
										<th>Subject Heading</th>

										<th>



									</tr>
								</thead>
								<tbody>
									<?php

									while ($row = mysqli_fetch_assoc($res)) { ?>
										<tr>

											<td>
												<?php echo $row['id'] ?>
											</td>

											<td>
												<?php echo "<span class='btn btn-outline-primary'><a href='data.php?type=info&id=" . $row['categories_id'] . "'><strong style='font-size: 1.2em;'>" . $row['categories'] . "</strong></a></span>"; ?>
											</td>


											<td>
												<?php echo $row['heading'] ?>
											</td>
											<td>

											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
				       </from>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require('footer_inc.php');
?>