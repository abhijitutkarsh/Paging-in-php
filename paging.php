<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paging in PHP</title>
</head>
<body>
    <?php
include 'connection.php';
					
$selectquery = " select * from paging.paging " ;
$page=$_GET["page"];

if($page=="" || $page =="1")
{
    $page1=0;
}
else{
    $page1=($page*10)-10;
}

$selectquery1 = " select * from paging.paging limit $page1,10" ;

$query1 = mysqli_query($con,$selectquery);
$query = mysqli_query($con,$selectquery1);

$nums = mysqli_num_rows($query);
while($res = mysqli_fetch_array($query))
{
    echo $res["id"] ." ". $res["name"];
    echo "<br>";
}
$cou = mysqli_num_rows($query1);
$a = $cou/10;
$a= ceil($a);
echo "<br>"; echo "<br>";
for($b=1;$b<=$a;$b++)
{
    ?><a href="paging.php?page=<?php echo $b; ?>" style = "text-decoration:none"><?php echo $b." ";?></a><?php

}
    ?>

</body>
</html>