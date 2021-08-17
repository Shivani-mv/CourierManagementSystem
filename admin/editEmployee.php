
<?php
include('header.php');
include('sidebar.php');
include('../connection.php');	

$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"select * from emplyee where id='$id'");
$res=mysqli_fetch_array($sql);
?>

<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Edit Employee Details </h3>
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
							<label for="focusedinput" class="col-sm-2 control-label">Employee ID :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="id" placeholder="id" required="" id="id" value="<?php echo $res['id'];?>" readonly="" >
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch ID:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="branch_id" placeholder="branch_id" required="" id="branch_id" value="<?php echo $res['branch_id'];?>"   >
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Employee Name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="name" placeholder="name" required=""  id="name" value="<?php echo $res['name'];?>" readonly=""  >
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="branch_name" required="" id="branch_name" value="<?php echo $res['branch_name'];?>" readonly="" >
							</div>
						</div>
							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Date of joining</label>
							<div class="col-sm-8">
								<input type="date" class="form-control1" name="dateofjoin" required="" id="dateofjoin" value="<?php echo $res['dateofjoin'];?>" readonly="">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"> Role</label>
							<div class="col-sm-8">
							<input type="text" class="form-control1" name="role" required="" id="role" value="<?php echo $res['role'];?>" >
							</div>
						</div>
<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"> Salary</label>
							<div class="col-sm-8">
							<input type="text" class="form-control1" name="salary" required="" id="salary" value="<?php echo $res['salary'];?>" >
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<button type="Submit" class="btn btn-success" name="applyemployee">Submit</button>
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

	if(isset($_REQUEST['applyemployee']))
	{
		include('../connection.php');	

		 $branch_id=$_REQUEST['branch_id'];		
		 $role=$_REQUEST['role'];
		 $salary=$_REQUEST['salary'];



		$sql="UPDATE `emplyee` SET `branch_id` = '$branch_id',`role` = '$role', `salary` = '$salary' WHERE `emplyee`.`id` = '$id'";

		$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('update sucessfully');window.location='view_emplyee.php'</script>";
		}
		else
		{
			echo"<script>alert('data update error');window.location='view_emplyee.php'</script>";

		}

	}
	?>


