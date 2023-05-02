<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="nav2.css">
<title>
Admin Dashboard
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
				<a href="#">Add New Medicine</a>
				<a href="#">Manage Inventory</a>
			</div>
			<button class="dropdown-btn">Suppliers
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="#">Add New Supplier</a>
				<a href="#">Manage Suppliers</a>
			</div>
			<button class="dropdown-btn">Employees
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="#">Add New Employee</a>
				<a href="#">Manage Employees</a>
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
		<a href="logout.php">Logout(Logged in as Admin)</a>
	</div>
	
	<center>
	<div class="head">
	<h2> ADMIN DASHBOARD </h2>
	</div>
	</center>
	
	<a href="#" title="Add New Sale">
	<img src="carticon1.png" style="padding:8px;margin-left:450px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Add New Sale">
	</a>
	
	<a href="#" title="View Inventory">
	<img src="inventory.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Inventory">
	</a>
	
	<a href="#" title="View Employees">
	<img src="emp.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Employees List">
	</a>
	<br>
	<a href="#" title="View Transactions">
	<img src="moneyicon.png" style="padding:8px;margin-left:550px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Transactions List">
	</a>
	
	<a href="#" title="Low Stock Alert">
	<img src="alert.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Low Stock Report">
	</a>
	
	
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