<?php 
include('header.php');
include('sidebar.php');
include('../connection.php');
?>

<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<style>
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 50px;
  right: 28px;

  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: relative;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.buttom_align {
  position: relative;
  right: 20px;
  bottom: 100px;
}
</style>

<script>
    $(document).ready(function () {

        $('#example').DataTable();
    });
</script>

<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Order Report</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">



<a href="add_consignment.php"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Add new courier</button></a><br><br>

        <table class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
            
            
            
              <th>Order ID</th>
              <th>Sender's name</th>
              <th>Sender's address</th>
              <th>Phone no.</th>
              <th>No. of items</th>
              <th>Branch ID</th>
              <th>Date of booking</th>
              <th>Charge (in Rs.)</th>
              <th>Receiver name</th>
              <th>Receiver address</th>
              <th>Receiver phone</th>
              <th>Destination Branch ID</th>
              <th>Status</th>
              

            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="CALL `getconsignment`();";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>

            
             
            <td><?php echo $ros['ccn'];?></td>
            <td><?php echo $ros['shippername'];?></td>
            <td><?php echo $ros['shipperasddress'];?></td>
            <td><?php echo $ros['phone'];?></td>
            <td><?php echo $ros['no_of_item'];?></td>
            <td><?php echo $ros['branch_id'];?></td>            
            <td><?php echo $ros['date_of_booking'];?></td>
            <td><?php echo $ros['shipment_charge'];?></td>
            <td><?php echo $ros['reciver_name'];?></td>
            <td><?php echo $ros['reciver_address'];?></td>
            <td><?php echo $ros['reciver_phone'];?></td>
            <td><?php echo $ros['destination_name'];?></td>
            <td><?php echo $ros['status'];?></td>
                  
          </tr>
          <?php

          }

        ?>
       

          </tbody>

        </table>
<br>
<script language="javascript">
function validate()
  {
 if (form.Consignment.value == "" )
{
alert("Consignment No. is required.");
form.track.focus( );
return false;
}
}
</script>

<button class="btn btn-primary" onclick="openForm()"><i class="fa fa-eye"></i> View Details</button>

<div class="form-popup" id="myForm">
  
     <form action="view_details.php" method="post" name="Consignment" id="fname" >
     <input name="Consignment" class="gentxt" id="Consignment" maxlength="50" type="text">
                  <input name="Submit" type="submit" class="btn btn-primary" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Submit">
    <button type="button" class="btn btn-primary" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
  </div>
</div>

      </div>
    </div>
<?php

include('footer.php');

?>
