<table>
	<th>Name</th>
	<th>Email</th>
	<th>Date & Time</th>

<?php
include('config.php');
$sql= "select * from user";
$result = mysqli_query($conn,$sql);
   echo mysqli_num_rows($result);
while ($row=mysqli_fetch_array($result)) { ?>
 <tr>
 	<td><?php echo $row['name']; ?></td>
 	<td><?php echo $row['email']; ?></td>
 	<td><?php echo $row['created']; ?></td>
 </tr>
	
<?php } ?>
</table>
