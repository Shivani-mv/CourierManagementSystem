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
    <h3 class="blank1">Employee Details</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">

        <h4>BRANCH ID: 4005</h4><h4>BRANCH NAME: Wilson Garden</h4><br>
        <table class="display" width="100%" cellspacing="0">
          <thead>

            

            <tr>
            <th>S.No</th>
            <th>Employee id</th>
              <th>Employee Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>Date of joining</th>
              <th>Role</th>
              <th>Salary</th>
           
            </tr>
          </thead>
          <tbody>

          <?php 
            $sql="Select * from emplyee WHERE branch_id='4005'";
            $res=mysqli_query($conn,$sql);
            $i=1;
            
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          
          <tr>


            <td><?php echo $i++;?></td>
            <td><?php echo $ros['id'];?></td>
            <td><?php echo $ros['name'];?></td>
            <td><?php echo $ros['phone_no'];?></td>
            <td><?php echo $ros['address'];?></td>
            <td><?php echo $ros['dateofjoin'];?></td>
            <td><?php echo $ros['role'];?></td>
            <td><?php echo $ros['salary'];?></td>

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


if(isset($_REQUEST['deleteid']))
{

$id=$_REQUEST['deleteid'];

$sql="DELETE FROM `emplyee` WHERE `emplyee`.`id` = '$id'";


    $res=mysqli_query($conn,$sql);

    if($res)
    {
      echo"<script>alert('Employee information deleted successfully');window.location='view_emplyee.php'</script>";
    }
    else
    {
      echo"<script>alert('data Delete error');window.location='view_emplyee.php'</script>";

    }


}
?>
