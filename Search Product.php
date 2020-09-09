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
		margin: 10% 20%;
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
		<h1>Search Product Information</h1>
		<form action="Search_Product_Connect.php" method="POST" >
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
	</div>
	
    <div class="footer">
		<footer>
			<h3> Created By Md. Touhedur Rahman_ID: 17103081_Section: F</h3>
		</footer>
	</div>
  </body>
</html>