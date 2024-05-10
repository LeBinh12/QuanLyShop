<h3><i class="fa fa-angle-right"></i>Thêm Sản Phẩm</h3>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Thêm thông tin sản phẩm mới</h4>
                      <form class="form-horizontal style-form" action="" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tên Sản Phẩm</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="NameProduct">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Giá Sản Phẩm</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="PriceProduct">
                                  <span class="help-block">Giá Sản Phẩm tính theo đơn vị VNĐ</span>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">File Ảnh</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="FileAnh">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Số Lượng Sản Phẩm hiện có</label>
                              <div class="col-sm-10">
                                  <input class="form-control" type="text" placeholder="Disabled input here..." name="QuantityProduct">
                                  <!-- id="disabledInput" -->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Chi Tiết Sản Phẩm</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" placeholder="placeholder" name="DetailProduct">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Sale</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" placeholder="placeholder" name="Sale">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Category</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" placeholder="placeholder" name="Category">
                              </div>
                          </div>
                          
                          <button type="submit" class="btn btn-theme" name="AddProduct">Thêm</button>
                       
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
<?php 
    if(isset($_POST['AddProduct'])){
        $Name = $_POST["NameProduct"];
        $Price = $_POST["PriceProduct"];
        $FileAnh = $_POST["FileAnh"];
        $Quantity = $_POST["QuantityProduct"];
        $Sale = $_POST["Sale"];
        $Category = $_POST["Category"];
        $Detail = $_POST["DetailProduct"];

        AddProduct($Name, $Price,$FileAnh,$Quantity,$Sale,$Category,$Detail);
        
        }
?>      
  	