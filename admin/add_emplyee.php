<script>

function show(a)
{
	var reqid=a;

	$.ajax({
			url:'getbyempyee.php',
			 type: 'POST',
			data:{'id':reqid},
			success:function(res)
			{
				result=JSON.parse(res);
					console.log(result);
				   result=JSON.stringify(response);

				 if (result.status==="sucess") {
				   	console.log(result.data.branch_name);

                                        
		               	$("#branch_name").val(result.data.branch_name);
				   	


			  }


			

			}

		});
}
</script>
<?php
include('header.php');
include('sidebar.php');

include('../connection.php');	


?>

<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Add Employee </h3>
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
							<label for="focusedinput" class="col-sm-2 control-label">Employee name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="name" placeholder="Enter employee name" required="" id="name">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Role:</label>
							<div class="col-sm-8">
								<select class="form-control" id="sel1" name="role">
   									 <option value="Deliveryboy">Delivery Boy</option>
<option value="Staff">Staff</option>
<option value="Admin">Admin</option>
<option value="Clerk">Clerk</option>
  								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch Id:</label>
							<div class="col-sm-8">
							<select class="form-control" id="sel1" name="branch_id" onchange="show(this.value)">
								<option>select</option>
								<?php 
								$sql=mysqli_query($conn,"select branch_id from branch");
									while($res=mysqli_fetch_array($sql))
									{

									?>
									 <option value="<?php echo $res['branch_id'];?>"><?php echo $res['branch_id'];?></option>
									<?php
								}
								?>
  								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Branch Name:</label>
							<div class="col-sm-8">
							<select class="form-control" id="sel1" name="branch_name" onchange="show(this.value)">
								<option>select</option>
								<?php 
								$sql=mysqli_query($conn,"select branch_name from branch");
									while($res=mysqli_fetch_array($sql))
									{

									?>
									 <option value="<?php echo $res['branch_name'];?>"><?php echo $res['branch_name'];?></option>
									<?php
								}
								?>
  								</select>
							</div>
						</div>
						

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Date of join</label>
							<div class="col-sm-8">
								<input type="date" class="form-control1" name="dateofjoin" placeholder="Enter Joining date of employee" required="" id="joindate" >
							</div>
						</div>
							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Salary</label>
							<div class="col-sm-8">
								<input type="number" class="form-control1" name="salary" placeholder="Enter salary" required="" id="sal">
							</div>
						</div>

<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Phone Number</label>
							<div class="col-sm-8">
								<input type="number" class="form-control1" name="phone_no" placeholder="Enter employee phone number" required="" id="phone">
							</div>
						</div>

<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Address</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="address" placeholder="Enter employee address" required="" id="add">
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
			$name=$_REQUEST['name'];                      
			$role=$_REQUEST['role'];
			$branch_id=$_REQUEST['branch_id'];
			$branch_name=$_REQUEST['branch_name'];
			$dateofjoin=$_REQUEST['dateofjoin'];
			$salary=$_REQUEST['salary'];
			$phone_no=$_REQUEST['phone_no'];
			$address=$_REQUEST['address'];

		
		$sql="INSERT INTO `emplyee` (`id`,`name`,`role`, `branch_id`, `branch_name`, `dateofjoin`, `salary`, `phone_no`, `address`) VALUES (NULL,'$name','$role','$branch_id','$branch_name','$dateofjoin', '$salary', '$phone_no', '$address')";

		$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('Add employee  sucessfully');window.location='view_emplyee.php'</script>";
		}
		else
		{
			echo"<script>alert('Employee insert error');window.location='add_emplyee.php'</script>";

		}

	}
	?>

<?php 
	include('footer.php');
?>

