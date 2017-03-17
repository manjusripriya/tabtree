<table>
	<th>Name</th>
		<th>Date & Time</th>

<?php
include('config.php');
//Previous Month Records
/* $sql= "SELECT * FROM user
WHERE YEAR(created) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
AND MONTH(created) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)

"; */
 $result = mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) { ?>
 <tr>
 	<td><?php echo $row['name']; ?></td>
  	<td><?php echo $row['created']; ?></td>
 </tr>
	
<?php } ?>


</table>