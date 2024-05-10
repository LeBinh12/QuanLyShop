<h3><i class="fa fa-angle-right"></i>Thêm Loại</h3>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Thêm Vào Loại Mới</h4>
                      <form class="form-horizontal style-form" action="" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tên Sản Phẩm</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="NameCategory">
                              </div>
                          </div>
                         
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">File Ảnh</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="FileAnh">
                              </div>
                          </div>        
                          <button type="submit" class="btn btn-theme" name="AddCategory">Thêm</button>
                       
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->

<?php 
    if(isset($_POST['AddCategory'])){
        $Name = $_POST['NameCategory'];
        $Image = $_POST['FileAnh'];
        AddCategory($Name, $Image);
    }
?>
   