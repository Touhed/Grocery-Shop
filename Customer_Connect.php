
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
		background-image: url("images/3.jpg");
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
		margin: 5% 38%;
		margin-top: 150px;
	}
	input{width: 85%;height: 25px;}
	input[type="submit"] {width: 45%;margin: 3% 15%;}
	h1
	{
		margin: 1% 15%;
		padding-top: 10px;
		color: white;
		font-weight: bold;
		text-align: center;
	}
	form 
	{
		background-color: #41a0f4;
		width: 160%;
		padding-left: 45px; 
		margin: 0% -35%;
	}
    .php
	{
		font-size: 40px;
		font-family: Times New Roman;
		background-color: white;
		color: black;
		margin: 0% -80%;
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
	   
	<div class="mbody">
		<div class="php">
			<?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="db_grocery";
			$conn=mysqli_Connect($servername,$username,$password,$dbname);
			if(!$conn)
			{
				die("connection failed -");
			}
			else
			{
				echo "Successfull =>";
			}
			$sql="INSERT INTO tb_customer(Customer_ID,Customer_Name,Customer_Address,Customer_Contact,Customer_Email)VALUES('$_POST[cid]','$_POST[cname]','$_POST[caddress]','$_POST[ccontact]','$_POST[cemail]')";
			if(mysqli_query($conn,$sql))
			{
				echo " New Record Inserted Successfully";
			}
			else
			{
				echo " Error";
			}
			mysqli_close($conn);
			?>
		</div>
		<form action="Customer_Connect.php" method="POST">
			<h1>Customer Details Form</h1>

			Customer_ID:</br>
			<input type="text" name="cid" value=""></br>
			
			Customer_Name:</br>
				<input type="text" name="cname" value=""></br>
				
			Customer_Address:</br>
				<input type="text" name="caddress" value=""></br>
				
			Customer_Contact:</br>
				<input type="text" name="ccontact" value=""></br>

			Customer_Email:</br>
			<input type="text" name="cemail" value=""></br>
		
			<input type="Submit" value="SAVE">
		</form>
	</div>
	
    <div class="footer">
		<footer>
			<h3> Created By Md. Touhedur Rahman_ID: 17103081_Section: F</h3>
		</footer>
	</div>
</body>
</html>