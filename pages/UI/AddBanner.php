<h3><i class="fa fa-angle-right"></i> Thêm Banner</h3>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Thêm Banner</h4>
                      <form class="form-horizontal style-form" action="" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Ảnh Banner</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="ImageBanner">
                              </div>
                          </div>
                          <button type="submit" class="btn btn-theme" name="AddBanner">Thêm</button>
                       
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
<?php 
	if(isset($_POST['AddBanner'])){
		$Banner = $_POST['ImageBanner'];
		AddBanner($Banner);
	}
?>