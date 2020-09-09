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
		<!--background-image: url("images/banner.jpg");-->
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
		margin: 5% 15%;
		padding-top: 20px;
		color: black;
		font-weight: bold; 
	}
	form
	{
		margin: 0% 25%;
	}
	table 
	{
		padding-top: 10px;
		border: black;
		color: black;
		width: 100%;
		text-align: center;
		font-weight: bold;
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
		<h1>Search Result On Payment Information</h1>
		<form action="Search_Payment_Connect.php" method="POST" >
		<?php
		$conn=mysqli_connect('localhost','root','','db_grocery');
		?>
		<select name="searchKeyword" class="form-control">
		<option value="pick">Payment Id</option>
		<?php
		$sql = mysqli_query($conn, "SELECT Payment_ID FROM `tb_payment`");
		$row = mysqli_num_rows($sql);
		while ($row = mysqli_fetch_array($sql)){
		echo "<option value='". $row['Payment_ID'] ."'>" .$row['Payment_ID'] ."</option>" ;
		}
		?>
		<button><input type="submit" value="Search"></button>
		</form>
		
		<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr style="font-weight: bold">
			<th>Payment_ID</th>
			<th>Date</th>
			<th>Type</th>
			<th>Price(TK)</th>
			<th>Vat(%)</th>
			<th>Total_Cost</th>
		</tr>	
		
		<?php
		$conn = mysqli_Connect('localhost','root','','db_grocery');
		$searchKeyword=$_POST['searchKeyword'];
		if($searchKeyword)
		{
		$sql="SELECT * FROM `tb_payment` WHERE '".$searchKeyword."' IN (Payment_ID,Date,Type,Price,Vat,Total_Cost);";
		$result = mysqli_query($conn,$sql);
		while ($payment=mysqli_fetch_array($result)) 
			{
			echo "<tr>";
			echo"<td>".$payment['Payment_ID']."</td>";
			echo"<td>".$payment['Date']."</td>";
			echo"<td>".$payment['Type']."</td>";
			echo"<td>".$payment['Price']."</td>";
			echo"<td>".$payment['Vat']."</td>";
			echo"<td>".$payment['Total_Cost']."</td>";
			echo "</tr>";
			}
		}
		else{echo "Nothing Found.";}
		?>
		</table>
	</div>
	
    <div class="footer">
		<footer>
			<h3> Created By Md. Touhedur Rahman_ID: 17103081_Section: F</h3>
		</footer>
	</div>
	
</body>
</html>