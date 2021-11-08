
<?php 

/*-----------------------------------------------------------------------------
          ADDING OPERATOR SECTIN 
-----------------------------------------------------------------------------*/
 
 include 'connection.php';

 


  if (isset($_POST['add_vpricing'])) {

    $merchant_id = $_POST['merchant_id'];
    $vehicle_name = $_POST['vehicle_name'];
  
    $insert_vehicle = "insert into vehicle_type(merchant_id,vehicle_name)values('$merchant_id', '$vehicle_name')";

    $query = mysqli_query($con, $insert_vehicle);

    if ($query) {
    
     echo "<script> alert('Data Sent'); window.location.href = 'add_vpricing.php'; </script>";

    }
    else
      { 
           echo "<script> alert('Data Not Sent'); </script>";
           }

  }





 //DELETE OPERATOR SECTION

$del = $_GET['delete'];

 $mdelete = "delete from vehicle_type where id = '$del' ";

 $mdquery = mysqli_query($con, $mdelete);

 if ($mdquery) {
   echo "<script> alert('Vehicle deleted');  window.location.href = 'show_vehicle.php'; </script> ";
 }
else{
      echo "<script> alert('Vehicle Not deleted');   </script> ";
}





 ?>





 
    		 