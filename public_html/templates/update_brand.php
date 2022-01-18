<!-- Modal -->
	<div class="modal fade" id="form_brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title" id="exampleModalLabel">New Brand Entry</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
		    <div class="modal-body">
		        <form id="update_brand_form" onsubmit="return false">
		        	<div class="form-group">
		        		<label>Brand Name </label>
		        		<input type="hidden" id="bid" name="bid">
		        		<input type="text" name="update_brand" class="form-control" id="update_brand" placeholder="Enter Category Name">
		        		<small id="cat_error"></small>
		        	</div>
		        	<button type="submit" class="btn btn-primary">Update Brand</button>
		        </form>
		    </div>
        	<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	</div>
    	</div>
  </div>
</div>