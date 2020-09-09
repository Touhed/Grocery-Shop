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
		margin-top: 100px;
	}
	h1
	{
		margin: 1% 15%;
		padding-top: 20px;
		color: black;
		font-weight: bold; 
		text-align: center;
	}
	form
	{
		margin: 0% 25%;
		text-align: center;
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
	
	.print
	{
		margin: 2% 3%;
		text-align: center;
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
	
	<div class="mbody" id="printableArea">
		<h1>Grocery Shop Management System<br><h3 style="text-align: center;">Address: Uttara Sector-10, Road No- 13B,House-139</h3></h1><br>
		<!--
		<form action="Search_Receipt_Connect.php" method="POST" >
		<?php
		$conn=mysqli_connect('localhost','root','','db_grocery');
		?>
		<select name="searchKeyword" class="form-control">
		<option value="pick">Product Id</option>
		<?php
		$sql = mysqli_query($conn, "SELECT ID FROM `tb_product`");
		$row = mysqli_num_rows($sql);
		while ($row = mysqli_fetch_array($sql)){
		echo "<option value='". $row['ID'] ."'>" .$row['ID'] ."</option>" ;
		}
		?>
		<button><input type="submit" value="Search"></button>
		</form>
		-->
		<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr style="font-weight: bold">
				<th>ID</th>
				<th>Name</th>
				<th>C_Name</th>
				<th>C_Address</th>
				<th>C_Contact</th>
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
		$sql="SELECT ID,Name,Customer_Name,Customer_Address,Customer_Contact,Date,Type,tb_payment.Price,Vat,Total_Cost 
		FROM ((tb_product  
		INNER JOIN tb_customer ON tb_product.ID = tb_customer.Customer_ID) 
		INNER JOIN tb_payment ON tb_product.ID = tb_payment.Payment_ID) WHERE '".$searchKeyword."' 
		IN (ID,Name,Quantity,Customer_Name,Customer_Address,Customer_Contact,tb_payment.Price,Vat,Total_Cost);";
		//$sql="SELECT * FROM `tb_payment` WHERE '".$searchKeyword."' IN (Payment_ID,Date,Type,Price,Vat,Total_Cost);";
		$result = mysqli_query($conn,$sql);
		while ($receipt=mysqli_fetch_array($result)) 
			{
			echo "<tr>";
				echo"<td>".$receipt['ID']."</td>";
				echo"<td>".$receipt['Name']."</td>";
				echo"<td>".$receipt['Customer_Name']."</td>";
				echo"<td>".$receipt['Customer_Address']."</td>";
				echo"<td>".$receipt['Customer_Contact']."</td>";
				echo"<td>".$receipt['Date']."</td>";
				echo"<td>".$receipt['Type']."</td>";
				echo"<td>".$receipt['Price']."</td>";
				echo"<td>".$receipt['Vat']."</td>";
				echo"<td>".$receipt['Total_Cost']."</td>";
				echo "</tr>";
			}
		}
		else{echo "Nothing Found.";}
		?>
		</table>
	</div>
	<div class="print">
	<input type="button" onclick="printDiv('printableArea')" value="Print" />
		<script>
		function printDiv(divName) {
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}</script>
	</div>
    <div class="footer">
		<footer>
			<h3> Created By Md. Touhedur Rahman_ID: 17103081_Section: F</h3>
		</footer>
	</div>
	
</body>
</html>