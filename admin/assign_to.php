<?php
include('header.php');
include('sidebar.php');
include('../connection.php');	

$id=$_REQUEST['id'];
$sql=mysqli_query($conn,"select * from consignment where id='$id'");

?>
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
				   // result=JSON.stringify(response);

				   if (result.status==="sucess") {
				   	console.log(result.data.name);

                                        
				   	$("#name").val(result.data.name);
				   	


				   }


			

			}

		});
}
</script>

<div id="page-wrapper">
	<div class="graphs">
		<h3 class="blank1"> Assign Employee </h3>
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
			<label for="focusedinput" class="col-sm-2 control-label">Employee Id:</label>
			<div class="col-sm-8">
			<select class="form-control" id="sel1" name="Empid" onchange="show(this.value)">
			<option>select</option>


	<?php 
	    $sql=mysqli_query($conn,"select `id` from `emplyee` where `role` ='Delivery Boy'");
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
<!--						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Employee Name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="name" placeholder="employee name" required="" id="empname">
							</div>
						</div> -->
						

						

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
	include('footer.php');
        if(isset($_REQUEST['applybranch']))
	{
		include('../connection.php');	

		 
		
		$assign_to_id=$_REQUEST['id'];



		$sql="UPDATE `consignment` SET `assign_to_id` = '$assign_to_id' WHERE `consignment`.`ccn` = '$id'";

		$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('updated sucessfully');window.location='dispatched.php'</script>";
		}
		else
		{
			echo"<script>alert('data update error');window.location='dispatched.php'</script>";

		}

	}

	
	?>

