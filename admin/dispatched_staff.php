<?php 

include('header.php');
include('sidebar.php');
include('../connection.php');

?>

<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {

        $('#example').DataTable();
    });
</script>
<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Dispatched Courier reports</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table  class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
            
            
                         
              <th>Order ID</th>
              <th>Sender's name</th>
              <th>Sender's address</th>
              <th>Phone no.</th>
              <th>Branch ID</th>
              <th>Date of booking</th>
              <th>Charge</th>
              <th>Reciver name</th>
              <th>Reciver address</th>
              <th>Reciver phone</th>
              <th>Status</th>
              <th>Assign to</th>
              <th>Update Status</th>

            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from consignment WHERE status='Dispatched' AND branch_id='4005'";
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
            <td><?php echo $ros['branch_id'];?></td>            
            <td><?php echo $ros['date_of_booking'];?></td>
            <td><?php echo $ros['shipment_charge'];?></td>
            <td><?php echo $ros['reciver_name'];?></td>
            <td><?php echo $ros['reciver_address'];?></td>
            <td><?php echo $ros['reciver_phone'];?></td>
            <td><?php echo $ros['status'];?></td>
            <td><?php echo $ros['assign_to_id'];?></td>
            <td><a href="update_status_dis.php?id=<?php echo $ros['ccn'];?>"><button type="button" class="btn btn-warning">Update Status</button></a></td>
<!--            <td><a href="assign_to.php?id=<?php echo $ros['ccn'];?>"><button type="button" class="btn btn-warning">Assign Delivery</button></a></td>
 <form action="view_details.php" method="post" name="Consignment" id="fname" > -->
     
           
          </tr>
          <?php

        }
        ?>
       

          </tbody>


        </table>
      </div>
    </div>
  </div>
</div>

<?php

include('footer.php');

?>
