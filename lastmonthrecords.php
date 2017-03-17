<?php
include('config.php');

 //Last Month Records
$sql="SELECT id FROM glpi_tickets
WHERE YEAR(date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
AND MONTH(date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)";
$result= mysqli_query($conn,$sql);
$las = mysqli_num_rows($result); ?>
<p>Last Month Record</p>
<?php echo "$las";
echo "<br>";
$sql1="select id from glpi_tickets  where  `date` >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
$result1= mysqli_query($conn,$sql1);
$las1 = mysqli_num_rows($result1); ?>
<p>Last 7 days Records</p>
<?php echo "$las1";
echo "<br>";
$sql2="SELECT id FROM glpi_tickets WHERE DATE(date) = CURDATE()";
$result2= mysqli_query($conn,$sql2);
$las2 = mysqli_num_rows($result2);?>
<p>Today Tickets</p>
<?php echo "$las2";
?>