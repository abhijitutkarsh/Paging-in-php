<?php

 $server ='localhost';
 $username = "root";
 $password = "";
 $db ='paging';
 //create a datebase connection
 $con = mysqli_connect($server, $username, $password, $db);

 //check for connection success
 if($con){
?>
    <script>
        alert('connection done');
        </script>
        <?php
}
else
{
die("no connection".
	 mysqli_connect_error());
 }
 ?>