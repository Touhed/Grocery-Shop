<?php
$conn = mysqli_Connect('localhost','root','','db_grocery');
$sql="SELECT * FROM `tb_employee`";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Grocery Shop DBMS</title>
<style> 
	.header 
	{
		position: fixed;
	    top: 0px;
	    left: 0%;
	    width: 100%;
	    height: auto;
	    padding: 0px;
	    text-align: center;
	    background-color: #006600;
	}

	.header h2 
	{
        text-align: center;
        font-size: 45px;
        margin-left: 80px; 
        color: white;
        margin: auto;
	}

	.nav
	{
		margin-top: 1px;
	}
	
	body
	{
		/*background-image: url("images/banner.jpg");*/
		background-size: cover;
		color:#000;	
		font-family:Times New Roman;
	}
	ul
	{
		margin:0px;
		padding:0px;
		list-style:none;
	}
	ul li
	{
		float:left;
	    width: 20%;
		height:40px;
		background-color:black;
		opacity:.8;
		line-height:40px;
		text-align:center;
		font-size:20px;
	}
	ul li a 
	{
	    text-decoration: none;
	    color: white;
		display:block;
	}
	ul li a:hover
	{
		background-color:green;
	}
	ul li ul li
	{
		display:none;
	    width: 100%;
	    background-color: black;
	}
	ul li:hover ul li
	{
		display:block;
	}

	.mbody
	{
		margin: 0% 10%;
		margin-top: 150px;
	}
	h1
	{
		margin: 2% 15%;
		padding-top: 20px;
		color: black;
		font-weight: bold;
		text-align: center;
	}
	table 
	{
		padding-top: 0px;
		background-color: white;
		color: black;
		width: 100%;
		text-align: center;
		font-size: 20px;
		font-family: Times New Roman;
	}	
	
	footer 
	{
	    position: fixed;
	    bottom: 0px;
	    left: 0%;
	    width: 100%;
	    padding: 0px;
	    text-align: center;
	    background-color: #006600;
	    
	}
	footer h3
	{
		color: white;
		text-align: center;
		height: 8px;
	}
	
	
</style>

</head>

    <body >
     <div class="header">
	   <h2>Grocery Shop Management System</h2>
	   <ul class="nav">
	      <li><a href="index.php">Home</a></li>
		  <li><a>Insert</a>
		    <ul>
			   <li><a href="Product.php">Product</a></li>
			   <li><a href="Employee.php">Employee</a></li>
		       <li><a href="Customer.php">Customer</a></li>
		       <li><a href="Payment.php">Payment</a></li>
			</ul>
		  </li>
		  <li><a>View</a>
			<ul>
			   <li><a href="View Product.php">Product</a></li>
			   <li><a href="View Employee.php">Employee</a></li>
			   <li><a href="View Customer.php">Customer</a></li>
		       <li><a href="View Payment.php">Payment</a></li>
			</ul>
		  </li>
		  <li><a>Search</a>
		  <ul>
			   <li><a href="Search Product.php">Product</a></li>
			   <li><a href="Search Employee.php">Employee</a></li>
		       <li><a href="Search Customer.php">Customer</a></li>
		       <li><a href="Search Payment.php">Payment</a></li>
		       <li><a href="Search Receipt.php">Report</a></li>
			</ul>
			</li>
		  <li><a href="View Receipt.php">Report</a></li>
	   </ul>
	   </div>
   
	<div class="mbody">
		<h1>Employee Information</h1>
		<table width="600" border="1" cellpadding="1" cellspacing="1">
			<tr style="font-weight: bold">
				<th>Employee_ID</th>
				<th>Employee_Name</th>
				<th>Employee_Address</th>
				<th>Employee_Contact</th>
				<th>Employee_Email</th>
				<th>Action</th>
			</tr>	

			<?php
			while ($employee=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo"<td>".$employee['Employee_ID']."</td>";
				echo"<td>".$employee['Employee_Name']."</td>";
				echo"<td>".$employee['Employee_Address']."</td>";
				echo"<td>".$employee['Employee_Contact']."</td>";
				echo"<td>".$employee['Employee_Email']."</td>";
				echo"<td>
				<a href='Edit_Employee.php?ID=".$employee['Employee_ID']."' style='text-decoration: none' />Edit</a>
				<a href='Delete_Employee.php?ID=".$employee['Employee_ID']."' style='text-decoration: none;' />Delete</a>
				<a href='print_Employee.php?ID=".$employee['Employee_ID']."' onclick='myWindow=window.open(this.ref 'newwindow','width=300,height=250')';>Print</a>
				</td>";
				echo "</tr>";
				}
			?>
		</table>
	</div>
		
    <div class="footer">
		<footer>
			<h3> Created By Md. Touhedur Rahman_ID: 17103081_Section: F</h3>
		</footer>
	</div>
	<script type="text/javascript">
	function printPage(){
        var tableData = '<table border="1">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
        var data = '<button onclick="window.print()">Print this page</button>'+tableData;       
        myWindow=window.open('','','width=800,height=600');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    };
	function printPageArea(x){

        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.window.print();
	}
 </script>​​​​​​
</body>
</html>