<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/24/2014
 * Time: 11:55 PM
 */
include("Connections/Connection.php");
$delete_id=$_GET['id'];
$delete_query="DELETE FROM daftar WHERE id='$delete_id'";//delete query
$run=mysqli_query($Connection,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>alert('Data staf telah berjaya dipadam.');
			window.location = 'list_staf.php';</script>";
}


?>