<?php 

/*-----------------------------------------------------------------------------
          ADDING OPERATOR SECTIN 
-----------------------------------------------------------------------------*/
 
 include 'connection.php';

 


  if (isset($_POST['add_vehicle'])) {

    $merchant_id = $_POST['merchant_id'];
    $vehicle_type = $_POST['vehicle_type'];
    $price_hr = $_POST['price_hr'];
 
    $insert_vehicle = "insert into vehicle_pricing(merchant_id,vehicle_type,price_perhour)values('$merchant_id', '$vehicle_type','$price_hr')";

    $query = mysqli_query($con, $insert_vehicle);

    if ($query) {
    
     echo "<script> alert('Data Sent'); window.location.href = 'add_vehicle.php'; </script>";

    }
    else
      { 
           echo "<script> alert('Data Not Sent'); </script>";
           }

  }





 //DELETE OPERATOR SECTION

$del = $_GET['delete'];

 $mdelete = "delete from vehicle_pricing where id = '$del' ";

 $mdquery = mysqli_query($con, $mdelete);

 if ($mdquery) {
   echo "<script> alert('Vehicle deleted');  window.location.href = 'show_vehicle.php'; </script> ";
 }
else{
      echo "<script> alert('Vehicle Not deleted');   </script> ";
}





 ?>





 
    		 