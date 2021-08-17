<?php
include('header.php');

include('connection.php');	
$sql=mysqli_query($conn,"select * from feedback");
$res=mysqli_fetch_array($sql);



?>
  

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
                                        $("#orderid").val(result.data.order_id);			   	
				   	$("#name").val(result.data.name);
				   	$("#email").val(result.data.email);
				   	$("#message").val(result.data.message)
                                      


				   }


			

			}

		});
}
</script>





<style>

html {
  font: 300 100%/1.5 Ubuntu, sans-serif;
  color: #333;
  overflow-x: hidden;
}
h2 {
  margin: 0;
  color: #8495a5;
  font-size: 2.5em;
  font-weight: 300;
}
#contact-form {
  max-width: 1208px;
  max-width: 75.5rem;
  margin: 0 auto;
}
#contact, label, input[name="submit"] {
  position: relative;
}
label > span, input, textarea, button {
  box-sizing: border-box;
}
label {
  display: block;
}
label > span {
  display: none;
}
input, textarea, button {
  width: 100%;
  padding: 0.5em;
  border: none;
  font: 300 100%/1.2 Ubuntu, sans-serif;
}
input[type="text"], input[type="email"], textarea {
  margin: 0 0 1em;
  border: 1px solid #ccc;
  outline: none;
}
input.invalid, textarea.invalid {
  border-color: #d5144d;
}
textarea {
  height: 6em;
}
input[type="submit"], button {
  background: #a7cd80;
  color: #333;
}
input[type="submit"]:hover, button:hover {
  background: #91b36f;
}
@media screen and (min-width: 30em) {
  #contact-form h2 {
    margin-left: 26.3736%;
    font-size: 2em;
    line-height: 1.5;
  }
  label > span {
    vertical-align: top;
    display: inline-block;
    width: 26.3736%;
    padding: 0.5em;
    border: 1px solid transparent;
    text-align: right;
  }
  input, textarea, button {
    width: 73.6263%;
    line-height: 1.5;
  }
  textarea {
    height: 10em;
  }
  input[type="submit"], button {
    margin-left: 26.3736%;
  }
}
@media screen and (min-width: 48em) {
  #contact-form {
    text-align: justify;
    line-height: 0;
  }
  #contact-form:after {
    content: '';
    display: inline-block;
    width: 100%;
  }
  #contact-form h2 {
    margin-left: 17.2661%;
  }
  #contact-form form, #contact-form aside {
    vertical-align: top;
    display: inline-block;
    width: 65.4676%;
    text-align: left;
    line-height: 1.5;
  }
  #contact-form aside {
    width: 30.9353%;
  }


}

</style>





  
   <br><br><br><br><br><br>
      <!---------------- 

      CONTACT PAGE LEFT 
    
      -----------------> 
   
<section id="contact-form">

  <h2>Contact</h2>
  <div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label"> Name</label>
		<div class="col-sm-8">

	<input type="text" class="form-control1" name="name" placeholder="Enter your Name" required="" id="officeaddress">
							</div>
						</div>
<div class="form-group">
	<label for="focusedinput" class="col-sm-2 control-label"> Order ID</label>
	<div class="col-sm-8">
			<input type="text" class="form-control1" name="order_id" placeholder="Enter Order ID" required="" id="officeaddress">
							</div>
						</div>
<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"> Email</label>
							<div class="col-sm-8">
							<input type="text" class="form-control1" name="email" required="" placeholder="Enter Email ID" id="officeaddress">
							</div>
						</div>
<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"> Message</label>
							<div class="col-sm-8">
							<input type="text" class="form-control1" name="message" required="" placeholder="Enter your comments" id="officeaddress">
							</div>
						</div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<button type="Submit" class="btn btn-success" name="applybranch">Submit</button>
</div>
  </form>
  <aside><br>

	<p>Speed Age Couriers</p>
          
         <p><i class="fa fa-phone">(+91) 9934801200</i></p>
          
        <p><i class="fa fa-envelope "><span class="contact-text gmail"><a href="mailto:#" title="Send me an email"> speedagecouriers@gmail.com</a></span></i></p>

</aside>
  
  
  
			

 
      
    
    
      <!---------------- 

      CONTACT PAGE RIGHT 
    
      -----------------> 
    

  
		<!--body wrapper end-->



	<?php 

	if(isset($_REQUEST['applybranch']))
	{
			
		include('connection.php');	
		 $order_id=$_REQUEST['order_id'];
		 $name=$_REQUEST['name'];
		 $email=$_REQUEST['email'];
		 $message=$_REQUEST['message'];

		$sql="INSERT INTO `feedback` (`id`, `order_id`, `name`, `email`,`message`) VALUES (NULL,'$order_id', '$name','$email','$message')";

		
	$res=mysqli_query($conn,$sql);

		if($res)
		{
			echo"<script>alert('Thank you! Message sent successfully');window.location='view_test.php'</script>";
		}
		else
		{
			echo"<script>alert('Message not sent ! Try Again.');window.location ='report.php'</script>";

		}

	}
	?>

 <br><br><br> 
	