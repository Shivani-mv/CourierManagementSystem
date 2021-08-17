<?php 

include('header.php');
include('sidebar.php');
include('../connection.php');

?>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script>
    $(document).ready(function () {

        $('#example').DataTable();
    });
</script>
<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Branch Details</h3>

    <div class="xs tabls">
      <div class="bs-example4" data-example-id="contextual-table">
       <a href="add_branchrequest.php"><button type="button" class="btn btn-primary">Add Branch</button></a><br><br>
        <table  class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>S.No</th>
            <th>Branch ID</th>
              <th>Branch Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Pincode</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from branch";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>

            <td><?php echo $i++;?></td>
             <td><?php echo $ros['branch_id'];?></td>
            <td><?php echo $ros['branch_name'];?></td>
            <td><?php echo $ros['branchaddress'];?></td>
            <td><?php echo $ros['phone'];?></td>
            <td><?php echo $ros['pincode'];?></td>
            <td><a href="editbranch.php?id=<?php echo $ros['branch_id'];?>"><button type="button" class="btn btn-warning">Edit</button></a></td>
            <td><a href="branch_details.php?deleteid=<?php echo $ros['branch_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
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


if(isset($_REQUEST['deleteid']))
{

$branch_id=$_REQUEST['deleteid'];

$sql="DELETE FROM `branch` WHERE `branch`.`branch_id` = '$branch_id'";


    $res=mysqli_query($conn,$sql);

    if($res)
    {
      echo"<script>alert('Delete sucessfully');window.location='branch_details.php'</script>";
    }
    else
    {
      echo"<script>alert('data Delete error');window.location='branch_details.php'</script>";

    }


}
?>
