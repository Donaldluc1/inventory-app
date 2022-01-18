<!-- Modal -->
	<div class="modal fade" id="form_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
		    <div class="modal-body">
		        <form id="update_category_form" onsubmit="return false">
		        	<div class="form-group">
		        		<label>Full Name </label>
		        		<input type="hidden" id="id" name="id">
		        		<input type="text" name="update_user_name" class="form-control" id="update_user_name" placeholder="Enter Category Name">
		        		<small id="cat_error"></small>
		        	</div>
		        	<div class="form-group">
		        		<label>Email Adress </label>
		        		<input type="text" name="update_user_email" class="form-control" id="update_user_email" placeholder="Enter Category Name">
		        		<small id="cat_error"></small>
		        	</div>
		        	<div class="form-group">
		        		<label>User Type </label>
		        		<select class="form-control" id="update_user_type" name="update_user_type">
		        			
		        		</select>
		        	</div>
		        	<button type="submit" class="btn btn-primary">Update Category</button>
		        </form>
		    </div>
        	<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	</div>
    	</div>
  </div>
</div>