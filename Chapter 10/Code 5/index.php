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
			    <div class="media">
			  		<img class="d-flex mr-3 postThumbnail" src="https://t5.rbxcdn.com/e96e5ea34a7af7ac1083f9c0d81de638">

			  		<div class="media-body">
    					<h5 class="mt-0">Frahaan Hussain</h5>
    					<i>1st January 2000</i>

    					<div>
    						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    					</div>
  					</div>
				</div>
		  	</div>
		</div>
	</div>
</div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>