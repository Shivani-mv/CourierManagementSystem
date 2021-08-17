<?php 

include('header.php');
include('sidebar.php');
include('../connection.php');

?>
<style>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {

        $('#example').DataTable();
    });
</script>
<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">View Dispatch</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
        <table class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>S.No</th>
              <th>Dispatch id</th>
              <th>Name</th>
              <th>Dispatcher id</th>
              <th>ccn</th>
              <th>sender_address</th>
              <th>shipper_name</th>
              <th>phone</th>
              <th>Reciver_name</th>
              <th>Reciver phoneno</th>
              <th>Reciver address</th>
              <th>Assignto</th>
              

              
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from dispatcher";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>
            <td><?php echo $i++;?></td>
             <td><?php echo $ros['dispatchid'];?></td>
             <td><?php $id=$ros['dispatcher_Id'];

                  $ris=mysqli_query($conn,"SELECT * FROM  `emplyee` WHERE id ='$id'");
                  $ras=mysqli_fetch_array($ris);

                  echo $ras['name'];

             ?>
               


             </td>
            <td><?php echo $ros['dispatcher_Id'];?></td>

            <td><?php echo $ros['ccn'];?></td>
            <td><?php echo $ros['sender_address'];?></td>
            <td><?php echo $ros['shipper_name'];?></td>

             <td><?php echo $ros['phone'];?></td>
            <td><?php echo $ros['reciver_name'];?></td>
            <td><?php echo $ros['reciver_phoneno'];?></td>
            <td><?php echo $ros['reciver_address'];?></td>
            <td><?php echo $ros['assign_to_id'];?></td>

            


           <!--   $sql1="Select * from branch where branch_id='$branch'";
            $res2=mysqli_query($conn,$sql1);
            $ros2=mysqli_fetch_array($res2);
            echo $ros2['branchaddress'];
            ?></td> -->
          
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
