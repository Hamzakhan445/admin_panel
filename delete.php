<?php 
 include 'connection.php';
 $del = $_GET['delete'];

 $mdelete = "delete from merchant_table where id = '$del' ";

 $mdquery = mysqli_query($con, $mdelete);

 if ($mdquery) {
   echo "<script> alert('Data deleted');  window.location.href = 'show_merchant.php'; </script> ";
 }
else{
	    echo "<script> alert('Data Not deleted');   </script> ";
}

 ?>