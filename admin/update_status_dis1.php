
<?php
include('header.php');
include('sidebar.php');
include('../connection.php');	

$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"select * from consignmnet where ccn='$id'");

?>

<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Update Status </h3>
		<div class="col-sm-12">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				




<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-8">
								<select class="form-control" id="sel1" name="status">

<option value="Delivered">Delivered</option>



  								</select>
							

							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<button type="Submit" class="btn btn-success" name="applybranch">Update</button>
								<a href=""><button type="button" class="btn btn-danger">Cancel</button></a>
							</div>
						</div>

					</form>
				</div>
			</div>
			<!--body wrapper start-->
		</div>
		<!--body wrapper end-->
	</div>


	<?php 

	if(isset($_REQUEST['applybranch']))
	{
		include('../connection.php');	

		 
		
		 $status=$_REQUEST['status'];



		$sql="UPDATE `consignment` SET `status` = '$status' WHERE `consignment`.`ccn` = '$id'";

		$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('update sucessfully');window.location='view_consignment.php'</script>";
		}
		else
		{
			echo"<script>alert('data update error');window.location='view_consignment.php'</script>";

		}

	}
	?>


