$(document).ready(function(){
	var DOMAIN = "http://localhost/public_html";
	
	//Manage Category
	manageCategory(1);
	function manageCategory(pn){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {manageCategory:1,pageno:pn},
			success : function(data){
				$("#get_category").html(data);
			}
		})
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageCategory(pn);
	})

	$("body").delegate(".del_cat","click",function(){
		var did = $(this).attr("did");
		if (confirm("Are you sure? You want to delete...!")) {
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : {deleteCategory:1,id:did},
				success : function(data){
					if (data == "DEPENDENT_CATEGORY") {
						alert("Sorry! this Category is a parent of other Categories");
						manageCategory(1);						
					}else if (data == "CATEGORY_DELETED") {
						alert("Category Deleted successfully...! happy")
					}else if (data == "DELETED") {
						alert("DELETED Successfully");
					}else{
						alert(data);
					}
				}
			})
		
		}else{
			
		}
	})

//Fetch Category
	fetch_category();
	function fetch_category(){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {getCategory:1},
			success : function(data){
				var roott = "<option value='0'>Root </option>";
				var choose = "<option value=''>Choose </option>";
				$("#Parent_cat").html(roott+data);
				$("#select_cat").html(choose+data);
			}
		})
	}

	//Fetch Brand
	fetch_brand();
	function fetch_brand(){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {getBrand:1},
			success : function(data){
				var choose = "<option value=''>Choose Brand </option>"
				$("#select_brand").html(choose+data);
			}
		})
	}



	//Update Category
	$("body").delegate(".edit_cat","click",function(){
		var eid = $(this).attr("eid");
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {updateCategory:1,id:eid},
			success : function(data){
				console.log(data);
				$("#cid").val(data["cid"]);
				$("#update_Category").val(data["category_name"]);
				$("#Parent_cat").val(data["parent_cat"]);
			}
		})
	})

	$("#update_category_form").on("submit",function(){
		if ($("#update_Category").val() == "") {
			$("#update_Category").addClass("border-danger");
			$("#cat_error").html("<span class='text-danger'>Please Enter Category Name</span>");
		}else {
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#update_category_form").serialize(),
				success : function(data){
					alert(data);
					window.location.href = "";
			    }
		    })
		}
	})


	//---------------------BRAND--------------------------
	//Manage Brand
	manageBrand(1);
	function manageBrand(pn){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {manageBrand:1,pageno:pn},
			success : function(data){
				$("#get_brand").html(data);
			}
		})
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageBrand(pn);
	})
	//Delete Brand
	$("body").delegate(".del_brand","click",function(){
		var did = $(this).attr("did");
		if (confirm("Are you sure? You want to delete...!")) {
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : {deleteBrand:1,id:did},
				success : function(data){
					if (data == "DELETED") {
						alert("Brand is Deleted");
						manageBrand(1);
					}else{
						alert(data);
					}
				}
			})
		
		}
	})


	//Update Brand
	$("body").delegate(".edit_brand","click",function(){
		var eid = $(this).attr("eid");
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {updateBrand:1,id:eid},
			success : function(data){
				console.log(data);
				$("#bid").val(data["bid"]);
				$("#update_brand").val(data["brand_name"]);
			}
		})
	})


	$("#update_brand_form").on("submit",function(){
		if ($("#update_brand").val() == "") {
			$("#update_brand").addClass("border-danger");
			$("#brand_error").html("<span class='text-danger'>Please Enter Brand Name</span>");
		}else {
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#update_brand_form").serialize(),
				success : function(data){
					alert(data);
					window.location.href = "";
			    }
		    })
		}
	})


	//---------------------PRODUCTS--------------------------
	//Manage Product
	manageProduct(1);
	function manageProduct(pn){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {manageProduct:1,pageno:pn},
			success : function(data){
				$("#get_product").html(data);
			}
		})
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageProduct(pn);
	})

	//Delete Product
	$("body").delegate(".del_product","click",function(){
		var did = $(this).attr("did");
		if (confirm("Are you sure? You want to delete...!")) {
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : {deletePoduct:1,id:did},
				success : function(data){
					if (data == "DELETED") {
						alert("Product is Deleted");
						manageProduct(1);
					}else{
						alert(data);
					}
				}
			})
		
		}
	})


	//Update Product
	$("body").delegate(".edit_product","click",function(){
		var eid = $(this).attr("eid");
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {updateProduct:1,id:eid},
			success : function(data){
				console.log(data);
				$("#pid").val(data["pid"]);
				$("#select_cat").val(data["cid"]);
				$("#select_brand").val(data["bid"]);
				$("#update_product").val(data["product_name"]);
				$("#product_price").val(data["product_price"]);
				$("#product_qty").val(data["product_stock"]);
				$("#added_date").val(data["added_date"]);
			}
		})
	})


	//Update product
	$("#update_product_form").on("submit",function(){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : $("#update_product_form").serialize(),
			success : function(data){
				if (data == "UPDATED") {
					alert("Product Updated Successfully...!");
					window.location.href = "";
				}else{
					alert(data);
				}
			}
		})
	})

//-------------------------------Manage User-------------------------------------------

	//Manage User
	manageUser(1);
	function manageUser(pn){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {manageUser:1,pageno:pn},
			success : function(data){
				$("#get_user").html(data);
			}
		})
	}

	$("body").delegate(".page-link","click",function(){
		var pn = $(this).attr("pn");
		manageBrand(pn);
	})

	//Update User
	$("body").delegate(".edit_user","click",function(){
		var eid = $(this).attr("eid");
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {updateUser:1,id:eid},
			success : function(data){
				
				var admin = "<option value='1'>Admin</option>";
				var other = "<option value='2'>Other</option>";
				console.log(data);
				$("#id").val(data["id"]);
				$("#update_user_name").val(data["username"]);
				$("#update_user_email").val(data["email"]);
				$("#update_user_type").val(data["usertype"]);
				//$("#update_user_type").html(boott+admin+other);
			}
		})
	})


	/*$("#update_brand_form").on("submit",function(){
		if ($("#update_brand").val() == "") {
			$("#update_brand").addClass("border-danger");
			$("#brand_error").html("<span class='text-danger'>Please Enter Brand Name</span>");
		}else {
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#update_brand_form").serialize(),
				success : function(data){
					alert(data);
					window.location.href = "";
			    }
		    })
		}
	})*/
})