<script>

function show(a)
{
	var reqid=a;

	$.ajax({
			url:'getbybranchcon.php',
			 type: 'POST',
			data:{'ccn':reqid},
			success:function(res)
			{
				result=JSON.parse(res);
					console.log(result);
				   // result=JSON.stringify(response);

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

<style>
#OptionsWrapper {
  
  width:100%; /* altered */ 
  height:78%; 
  overflow:scroll; /* changed to auto */
  z-index:999;
  }


}
</style>
<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Add Consignment  Details </h3>
		<div class="col-sm-12">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-2">
			</div>
		</div>


<div id='OptionsWrapper'>
  

		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						
				
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Shipper Name:</label>
							<div class="col-sm-8">
					<input type="text" class="form-control1" name="shippername" placeholder="Enter Shipper Name" required="" id="shipper_name">
							</div>
						</div>

							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Shipper address :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="shipperasddress" placeholder="Enter Shipper addrerss" required="" id="dshipperasdress">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Phone:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="phone" placeholder="Enter Shipper phone number" required="" id="phone">
							</div>
						</div>

							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Material Description:</label>
							<div class="col-sm-8">
							 <select class="form-control" id="sel1" name="material_descrption">
   									 <option value="document">document</option>
<option value="breakable">Breakables</option>
<option value="clothes">Clothes</option>
							</select>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">No of item</label>
							<div class="col-sm-8">
								<input type="number" class="form-control1" name="no_of_item" placeholder="Enter no of item" required="" >
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Total weight (in g)</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="total_weight" placeholder="Enter total weight of parcel in g" required="" id="total_weight">
							</div>
						</div>

							
						
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Shipping charge (in Rs.)</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="shipment_charge" placeholder="Enter Shipping charge in Rs" required="" >
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
							<label for="focusedinput" class="col-sm-2 control-label">Booked at branch:</label>
							<div class="col-sm-8">
							<select class="form-control" id="sel1" name="booked_at_branch" onchange="show(this.value)">
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
							<label for="focusedinput" class="col-sm-2 control-label">Date of booking :</label>
							<div class="col-sm-8">
								<input type="date" class="form-control1" name="date_of_booking" placeholder="Enter date of booking" required="" id="date">
							</div>
						</div>
						
						
												<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Destination Branch Id:</label>
							<div class="col-sm-8">
							<select class="form-control" id="sel1" name="destination_id" onchange="show(this.value)">
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
							<label for="focusedinput" class="col-sm-2 control-label">Destination Branch Name:</label>
							<div class="col-sm-8">
							<select class="form-control" id="sel1" name="destination_name" onchange="show(this.value)">
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
							<label for="focusedinput" class="col-sm-2 control-label">Receiver name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="reciver_name" placeholder="Enter Receiver name" required="" id="name">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Receiver Address :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="reciver_address" placeholder="Enter Reciever Address" required="">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Receiver Phone no :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="reciver_phone" placeholder="Enter Receiver Phone number" required="" >
							</div>
						</div>

							<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Status:</label>
							<div class="col-sm-8">
							 <select class="form-control" id="sel1" name="status">
<option value="New Courier">New courier</option>
   									 <option value="In-transit">In-transit</option>
<option value="Dispatched">Dispatched</option>

							</select>
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Assign to:</label>
							<div class="col-sm-8">
							<select class="form-control" id="sel1" name="assign_to_id" onchange="show(this.value)">
								<option>select</option>
								<?php 
								$sql=mysqli_query($conn,"select id from emplyee where role='Delivery Boy'");
									while($res=mysqli_fetch_array($sql))
									{

									?>
									 <option value="<?php echo $res['id'];?>"><?php echo $res['id'];?></option>
									<?php
								}
								?>
  								</select>
							</div>
						</div>



						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<button type="Submit" class="btn btn-success" name="Consignment">Submit</button>
								<a href=""><button type="button" class="btn btn-danger">Cancel</button></a>
							</div>
						</div>

					</form>
				</div>
			</div>
			<!--body wrapper start-->
		</div>

 </div> 

		<!--body wrapper end-->
	</div>


	<?php 
	include('footer.php');

	if(isset($_REQUEST['Consignment']))
	{
		$shippername=$_REQUEST['shippername'];
		$shipperasddress=$_REQUEST['shipperasddress'];
		$phone=$_REQUEST['phone'];
		$material_descrption=$_REQUEST['material_descrption'];
		$no_of_item=$_REQUEST['no_of_item'];
		$total_weight=$_REQUEST['total_weight'];
		$shipment_charge=$_REQUEST['shipment_charge'];
		$branch_id=$_REQUEST['branch_id'];
		$date_of_booking=$_REQUEST['date_of_booking'];
		$booked_at_branch=$_REQUEST['booked_at_branch'];
		$destination_id=$_REQUEST['destination_id'];
		$reciver_name=$_REQUEST['reciver_name'];
		$reciver_address=$_REQUEST['reciver_address'];
		$reciver_phone=$_REQUEST['reciver_phone'];
		$destination_name=$_REQUEST['destination_name'];
		$status=$_REQUEST['status'];
		$assign_to_id=$_REQUEST['assign_to_id'];


		


		$sql="INSERT INTO `consignment` (`ccn`, `shippername`, `shipperasddress`, `phone`, `material_descrption`,`no_of_item`,`total_weight`,`shipment_charge`,`branch_id`,`date_of_booking`,`booked_at_branch`,  `destination_id`,  `reciver_name`, `reciver_address`, `reciver_phone`,`destination_name`,`status`,`assign_to_id`) VALUES (NULL, '$shippername', '$shipperasddress', '$phone', '$material_descrption', '$no_of_item','$total_weight','$shipment_charge', '$branch_id','$date_of_booking', '$booked_at_branch', '$destination_id',  '$reciver_name', '$reciver_address', '$reciver_phone','$destination_name','$status','$assign_to_id')";

		$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('Consignment successfully added');window.location='view_consignment.php'</script>";
		}
		else
		{
			echo"<script>alert('Consignment insert error');window.location='add_consignment.php'</script>";

		}

	}
	?>


