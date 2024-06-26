<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="nav2.css">
<link rel="stylesheet" type="text/css" href="table1.css">
<title>
Employees
</title>
</head>

<body>

<div class="sidenav">
			<a href="adminmainpage.php">Dashboard</a>
				<a href="inventory-add.php">Add New Medicine</a>
				<a href="inventory-view.php">Manage Inventory</a>
				<a href="supplier-add.php">Add New Supplier</a>
				<a href="supplier-view.php">Manage Suppliers</a>
				<a href="purchase-add.php">Add New Purchase</a>
				<a href="purchase-view.php">Manage Purchases</a>
				<a href="employee-add.php">Add New Employee</a>
				<a href="employee-view.php">Manage Employees</a>
				<a href="customer-add.php">Add New Customer</a>
				<a href="customer-view.php">Manage Customers</a>
			<a href="sales-view.php">View Sales Invoice Details</a>
			<a href="salesitems-view.php">View Sold Products Details</a>
				<a href="stockreport.php">Medicines - Low Stock</a>
				<a href="expiryreport.php">Medicines - Soon to Expire</a>
				<a href="salesreport.php">Transactions Reports</a>
	</div>
	
	<center>
	<div class="head">
	<h2> EMPLOYEE LIST</h2>
	</div>
	</center>
	
	<table align="right" id="table1" style="margin-right:20px;">
		<tr>
			<th>Employee ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date of Birth</th>
			<th>Age</th>
			<th>Sex</th>
			<th>Employee Type</th>
			<th>Date of Joining</th>
			<th>Salary</th>
			<th>Phone Number</th>
			<th>Email Address</th>
			<th>Home Address</th>
			<th>Action</th>
		</tr>
		
	<?php
	
	include "config.php";
	$sql = "SELECT e_id, e_fname, e_lname, bdate, e_age, e_sex, e_type, e_jdate, e_sal, e_phno, e_mail, e_add FROM employee where e_id<>1";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {

	echo "<tr>";
		echo "<td>" . $row["e_id"]. "</td>";
		echo "<td>" . $row["e_fname"] . "</td>";
		echo "<td>" . $row["e_lname"] . "</td>";
		echo "<td>" . $row["bdate"] . "</td>";
		echo "<td>" . $row["e_age"]. "</td>";
		echo "<td>" . $row["e_sex"]. "</td>";
		echo "<td>" . $row["e_type"]. "</td>";
		echo "<td>" . $row["e_jdate"]. "</td>";
		echo "<td>" . $row["e_sal"]. "</td>";
		echo "<td>" . $row["e_phno"]. "</td>";
		echo "<td>" . $row["e_mail"]. "</td>";
		echo "<td>" . $row["e_add"]. "</td>";
		echo "<td align=center>";
		echo "<a class='button1 edit-btn' href=employee-update.php?id=".$row['e_id'].">Edit</a>";
		echo "<a onclick='return confirm('Are you sure to delete?');' class='button1 del-btn' href=employee-delete.php?id=".$row['e_id'].">Delete</a>";
		echo "</td>";
	echo "</tr>";
	}
	echo "</table>";
} 

	$conn->close();
	
	?>
	
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

