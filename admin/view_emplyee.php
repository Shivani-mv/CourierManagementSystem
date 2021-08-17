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
        <table  class="display" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>S.No</th>
              <th>Emp id</th>
              <th>Branch id</th>
              <th>Employee Name</th>
              <th>Branch Name</th>
              <th>Date of joining</th>
              <th>Role</th>
              <th>Salary</th>
              <th>Edit Details</th>
              <th>Delete Details</th>
           
            </tr>
          </thead>
          <tbody>
          <?php 
            $sql="Select * from emplyee";
            $res=mysqli_query($conn,$sql);
            $i=1;
            while($ros=mysqli_fetch_array($res))
            {
              ?>
          <tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $ros['id'];?></td>
            <td><?php echo $ros['branch_id'];?></td>
            <td><?php echo $ros['name'];?></td>
            <td><?php echo $ros['branch_name'];?></td>
            <td><?php echo $ros['dateofjoin'];?></td>
            <td><?php echo $ros['role'];?></td>
            <td><?php echo $ros['salary'];?></td>
<td><a href="editEmployee.php?id=<?php echo $ros['id'];?>"><button type="button" class="btn btn-warning">Edit</button></a></td>
            <td><a href="view_emplyee.php?deleteid=<?php echo $ros['id'];?>"><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Delete</button></a></td>
          </tr>
          <?php

        }
        ?>
    

          </tbody>


        </table>
<script>

function deleteRow(row)
{
    var result = confirm("Are you sure you want to delete this entry?");
    if (result) {
          var i=row.parentNode.parentNode;
          i.parentNode.removeChild(i);
     }
}

</script>   
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
