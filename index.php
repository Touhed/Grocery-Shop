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
		background-image: url("images/banner.jpg");
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
		text-align: center;
	}
    p span
    {
    	background-color: ;
    	color: black;
    	width: 100%;
    	padding-left: 45px;
    	margin: 0% -30%
    	font-family: Times New Roman;
    	font-size: 25px;
    	font-weight: bold;
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
	   <!--
		<div class="mbody">
			<h1>ABOUT THE DBMS</h1>
			<p>
			  <span>
			    The aim of this work is to establish the main factors that underlie store attributes in order to examine
				which of them present the greatest influences on achieving the maximum level of customer satisfaction. 
				Moreover, this study seeks to determine if there are significant differences not only between factor composition, 
				but also their influence on customer satisfaction, depending on the focal country of residence of customers.
			  </span>
			</p>		
		</div>
		-->
	   <div class="footer">
	   <footer>
			<h3> Created By Md. Touhedur Rahman_ID: 17103081_Section: F</h3>
		</footer>
		</div>
</body>
</html>