<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/order.js"></script>
</head>
<body>
<div class="overlay"><div class="loader"></div></div>
	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br> <br>

	<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div class="card" style="box-shadow: 0 0 25px 0 lightgrey;">
					<div class="card-header">
						<h4>New Orders</h4>
					</div>
					<div class="card-body">
						<form id="get_order_data" onsubmit="return false">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" align="right"> Order Date</label>
								<div class="col-sm-6">
									<input type="text" id="order_date" name="order_date" readonly class="form-control form-control-sm" value="<?php echo date("Y-d-m");?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label" align="right"> Customer Name*</label>
								<div class="col-sm-6">
									<input type="tex" id="cust_name" name="cust_name" class="form-control form-control-sm" placeholder="Enter Customer Name" required>
								</div>
							</div>

							<div class="card">
								<div class="card-body" style="box-shadow: 0 0 15px 0 lightgrey;">
									<h3>Make a Order List</h3>
									<table align="center" style="width: 800px;">
										<thead>
											<tr>
												<th>#</th>
												<th style="text-align: center;">Item Name</th>
												<th style="text-align: center;">Total Quantity</th>
												<th style="text-align: center;">Quantity</th>
												<th style="text-align: center;">Price</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody id="invoice_item">
										<!--	<tr>
												<td id="number">1</td>
												<td>
													<select name="pid[]" required class="form-control form-control-sm">
														<option>Washing Machine</option>
													</select>
												</td>
												<td><input type="text" name="tqty[]" readonly class="form-control form-control-sm"></td>
												<td><input type="text" name="qty[]" required class="form-control form-control-sm"></td>
												<td><input type="text" name="price[]" class="form-control form-control-sm" readonly></td>
												<td>Rs.1540</td>
											</tr>-->
										</tbody>
									</table> <!--Table Ends--->
									<center style="padding: 10px;">
										<button id="add" style="width: 150px;" class="btn btn-success">Add</button>
										<button id="remove" style="width: 150px;" class="btn btn-danger">Remove</button>
									</center>
								</div> <!--Card Body Ends--->
							</div> <!--Order List Card Ends--->

							<p></p>
							<div class="form-group row">
								<label for="sub_total" class="col-sm-3 col-form-label" align="right">Sub Total</label>
								<div class="col-sm-6">
									<input type="text" name="sub_total" class="form-control form-control-sm" id="sub_total" readonly required>
								</div>
							</div>
							<div class="form-group row">
								<label for="gst" class="col-sm-3 col-form-label" align="right">TVA (20%) </label>
								<div class="col-sm-6">
									<input type="text" readonly name="gst" class="form-control form-control-sm" id="gst" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="discount" class="col-sm-3 col-form-label" align="right">Discount </label>
								<div class="col-sm-6">
									<input type="text" name="discount" class="form-control form-control-sm" id="discount" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="net_total" class="col-sm-3 col-form-label" align="right">Net Total </label>
								<div class="col-sm-6">
									<input type="text" readonly name="net_total" class="form-control form-control-sm" id="net_total" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="paid" class="col-sm-3 col-form-label" align="right">Paid</label>
								<div class="col-sm-6">
									<input type="text" name="paid" class="form-control form-control-sm" id="paid" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="due" class="col-sm-3 col-form-label" align="right">Due</label>
								<div class="col-sm-6">
									<input type="text" name="due" readonly class="form-control form-control-sm" id="due" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="payment_type" class="col-sm-3 col-form-label" align="right">Payment Method</label>
								<div class="col-sm-6">
									<select name="payment_type" class="form-control form-control-sm" id="payment_type" required>
										<option>Cash</option>
										<option>Card</option>
										<option>Draft</option>
										<option>Cheque</option>
									</select>
								</div>
							</div>

							<center>
								<input type="submit" id="order_form" class="btn btn-info" value="Order">
								<input type="submit" id="print_invoice" class="btn btn-success d-none" value="Print Invoice">
							</center>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>