<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="nav2.css">
<link rel="stylesheet" type="text/css" href="form4.css">
<title>
Suppliers
</title>
</head>

<body>

<div class="sidenav">
			<h2 style="font-family:Arial; color:white; text-align:center;"> Pharmacy </h2>

			<a href="adminmainpage.php">Dashboard</a>
			<button class="dropdown-btn">Inventory
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="inventory-add.php">Add New Medicine</a>
				<a href="inventory-view.php">Manage Inventory</a>
			</div>
			<button class="dropdown-btn">Suppliers
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="supplier-add.php">Add New Supplier</a>
				<a href="supplier-view.php">Manage Suppliers</a>
			</div>
			<button class="dropdown-btn">Employees
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="employee-add.php">Add New Employee</a>
				<a href="employee-view.php">Manage Employees</a>
			</div>
			<button class="dropdown-btn">Customers
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="#">Add New Customer</a>
				<a href="#">Manage Customers</a>
			</div>
	</div>

	<div class="topnav">
		<a href="logout.php">Logout</a>
	</div>
	
	<center>
	<div class="head">
	<h2> ADD SUPPLIER DETAILS</h2>
	</div>
	</center>

	
	
	<div class="one row">
		
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<div class="column">
					<p>
						<label for="sid">Supplier ID:</label><br>
						<input type="number" name="sid">
					</p>
					<p>
						<label for="sname">Supplier Company Name:</label><br>
						<input type="text" name="sname">
					</p>
					<p>
						<label for="sadd">Address:</label><br>
						<input type="text" name="sadd">
					</p>
					
					
				</div>
				<div class="column">
					<p>
						<label for="sphno">Phone Number:</label><br>
						<input type="number" name="sphno">
					</p>
					
					<p>
						<label for="smail">Email Address </label><br>
						<input type="text" name="smail">
					</p>
					
				</div>
				
			
			<input type="submit" name="add" value="Add Supplier">
			</form>
		<br>
		
		
	<?php
			include "config.php";
			 
			if(isset($_POST['add']))
			{
			$id = mysqli_real_escape_string($conn, $_REQUEST['sid']);
			$name = mysqli_real_escape_string($conn, $_REQUEST['sname']);
			$add = mysqli_real_escape_string($conn, $_REQUEST['sadd']);
			$phno = mysqli_real_escape_string($conn, $_REQUEST['sphno']);
			$mail = mysqli_real_escape_string($conn, $_REQUEST['smail']);

			 
			$sql = "INSERT INTO suppliers VALUES ($id, '$name','$add',$phno, '$mail')";
			if(mysqli_query($conn, $sql)){
				echo "<p style='font-size:8;'>Supplier details successfully added!</p>";
			} else{
				echo "<p style='font-size:8; color:red;'>Error! Check details.</p>";
			}
			}
			 
			$conn->close();
	?>
	
	</div>
			
</body>

<script>
	
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

			for (i = 0; i < dropdown.length; i++) {
			  dropdown[i].addEventListener("click", function() {
			  this.classList.toggle("active");
			  var dropdownContent = this.nextElementSibling;
			  if (dropdownContent.style.display === "block") {
			  dropdownContent.style.display = "none";
			  } else {
			  dropdownContent.style.display = "block";
			  }
			  });
			}
			
</script>

</html>