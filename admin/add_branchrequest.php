<script>
function show(a)
{
	var reqid=a;

	$.ajax({
			url:'getbyid.php',
			 type: 'POST',
			data:{'id':reqid},
			success:function(res)
			{
				result=JSON.parse(res);
					console.log(result);
				   // result=JSON.stringify(response);

				   if (result.status==="sucess") {
				   	console.log(result.data.name);
                                        $("#branchid").val(result.data.branch_id);			
				   	$("#pincode").val(result.data.pincode);
				   	$("#phone").val(result.data.phone);
                                       






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
		<h3 class="blank1">Add New Branch</h3>
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
							<label for="focusedinput" class="col-sm-2 control-label">Branch Name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="branch_name" placeholder="Enter Branch name" required="">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Pincode</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="pincode" placeholder="Enter Branch pincode" required="" id="pincode">
							</div>
						</div>
							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Phone</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="phone" placeholder="Enter Branch Phone number" required="" id="phone">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"> Branch Address</label>
							<div class="col-sm-8">
							<input type="text" class="form-control1" name="branchaddress" placeholder="Enter Branch Address" required="" id="officeaddress">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<button type="Submit" class="btn btn-success" name="applybranch">Submit</button>
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
		 $branchaddress=$_REQUEST['branchaddress'];
		 $phone=$_REQUEST['phone'];
		 $pincode=$_REQUEST['pincode'];
		 $branch_name=$_REQUEST['branch_name'];
		 

             	 $sql="INSERT INTO `branch` (`branch_id`, `branchaddress`, `phone`,`pincode`,`branch_name`) VALUES (NULL,' $branchaddress', '$phone','$pincode','$branch_name')";

		$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('data insert sucessfully');window.location='branch_details.php'</script>";
		}
		else
		{
			echo"<script>alert('data insert error');window.location = 'add_branchrequest.php'</script>";

		}

	}
	?>

	<?php
	include('footer.php');
	?>
