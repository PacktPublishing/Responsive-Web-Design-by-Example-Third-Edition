<?php require_once( "SNIPPETS/HEADER.php" ); ?>

<div class="row">
	<div class="col-12">
		<form>
	    	<div class="row">
				<div class="col-12">
					<label for="postDescription">Post here...</label>
					<textarea class="form-control" id="postDescription" rows="5"></textarea>
				</div>

				<div class="col-12" id="PostButtonContainer">
					<button type="submit" class="btn btn-success col-12">Share To The World</button>
				</div>
	    	</div>
	  	</form>
	</div>
</div>

<div class="row">
	<div class="col-12 postContainer">
		<div class="card">
		  <div class="card-block">
		    This text is awesome.
		  </div>
		</div>
	</div>
</div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>