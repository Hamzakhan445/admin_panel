<?php 

/*-----------------------------------------------------------------------------
          ADDING OPERATOR SECTIN 
-----------------------------------------------------------------------------*/
 
 include 'connection.php';

if(isset($_POST['add_driver'])){

     $operator_id = $_POST['operator_id'];
       $car_number = $_POST['car_number'];
      $vehicle_type = $_POST['vehicle_type'];
  

 

        $insert_operator = "insert into driver_table(operator_id,car_number,vehicle_type)values('$operator_id', '$car_number', '$vehicle_type')";


        $op_query = mysqli_query($con, $insert_operator);

        if ($op_query) {
                  echo "<script> alert('Data sent'); window.location.href = 'add_driver.php';  </script> ";
        }
        else
        {
                  echo "<script> alert('Data Not sent');  </script> ";

        }




     }










 //DELETE OPERATOR SECTION

$del = $_GET['delete'];

 $mdelete = "delete from driver_table where id = '$del' ";

 $mdquery = mysqli_query($con, $mdelete);

 if ($mdquery) {
   echo "<script> alert('Driver deleted');  window.location.href = 'show_driver.php'; </script> ";
 }
else{
      echo "<script> alert('Driver Not deleted');   </script> ";
}





 ?>





 
    		 