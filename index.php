<?php include 'sidebar.php'; ?>

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>Blank Page</h2>   
                <h5>Selamat datang Sharil. </h5>
                <!-- Content Starts Here -->    
					<div class="row">
					   <?php 
						//scan "uploads" folder and display them accordingly
					   $folder = "uploads";
					   $results = scandir('uploads');
					   foreach ($results as $result) {
						if ($result === '.' or $result === '..') continue;
					   
						if (is_file($folder . '/' . $result)) {
							echo '
							<div class="col-md-3">
								<div class="thumbnail">
									<img src="'.$folder . '/' . $result.'" alt="...">
										<div class="caption">
										<p><a href="remove.php?name='.$result.'" class="btn btn-danger btn-xs" role="button">Remove</a></p>
									</div>
								</div>
							</div>';
						}
					   }
					   ?>
					</div>
					
					

					  <div class="row">
						<div class="col-lg-12">
						   <form class="well" action="upload.php" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								<label for="file">Select a file to upload</label>
								<input type="file" name="file">
								<p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed.</p>
							  </div>
							  <input type="submit" class="btn btn-lg btn-primary" value="Upload">
							</form>
						</div>
					  </div>

    </div>
     <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php include 'footer.php'; ?>