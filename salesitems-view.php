<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="nav2.css">
<link rel="stylesheet" type="text/css" href="table1.css">
<title>
Products - Sale
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
	<h2> LIST OF PRODUCTS SOLD</h2>
	</div>
	</center>
	
	<table align="right" id="table1" style="margin-right:100px;">
		<tr>
			<th>Sale ID</th>
			<th>Medicine ID</th>
			<th>Medicine Name</th>
			<th>Quantity Sold</th>
			<th>Total Price</th>
			
		</tr>
		
	<?php
	
	include "config.php";
	$sql = "SELECT sale_id, med_id,sale_qty,tot_price FROM sales_items";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {
		
		$sql1="SELECT med_name from meds where med_id=".$row["med_id"]."";
		$result1 = $conn->query($sql1);
		
		
		while($row1 = $result1->fetch_assoc()) {
		
			echo "<tr>";
				echo "<td>" . $row["sale_id"]. "</td>";
				echo "<td>" . $row["med_id"] . "</td>";
				echo "<td>" . $row1["med_name"]. "</td>";
				echo "<td>" . $row["sale_qty"]. "</td>";
				echo "<td>" . $row["tot_price"]. "</td>";
			echo "</tr>";
		}
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
