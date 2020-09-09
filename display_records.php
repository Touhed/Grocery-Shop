<?php
$conn = mysqli_Connect('localhost','root','','db_criminal');
$sql="SELECT * FROM `tb_accused`";
$result = mysqli_query($conn,$sql);

?>

<html>
<head>
<title>Accused Information</title>
</head>
<body>
	
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Father Name</th>
	<th>Address</th>
</tr>	

<?php
while ($accused=mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo"<td>".$accused['ID']."</td>";
	echo"<td>".$accused['Name']."</td>";
	echo"<td>".$accused['FatherName']."</td>";
	echo"<td>".$accused['Address']."</td>";
	echo "</tr>";
	}
?>

</table>
</body>
</html>