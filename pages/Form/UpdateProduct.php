<h3><i class="fa fa-angle-right"></i> Sửa sản phẩm</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length">
                                    <h4><i class="fa fa-angle-right"></i>Sửa thông tin sản phẩm</h4>
                                </div>
                             </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_filter">
                                <form action="" method="post">
                                <label>
                                    <input type="text" placeholder="Tìm Kiếm Sản Phẩm...?" name="Search" class="form-control form-control-sm">
                                    <button type="submit" class="btn btn-outline-dark">Tìm Kiếm</button> 
                                </label>
                                </form>
                            </div>
                         </div>
                      </div>

                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Mã Sản Phẩm</th>
                                  <th>Tên Sản Phẩm</th>
                                  <th class="numeric">Giá</th>
                                  <th class="numeric">Số lượng tồn</th>
                                  <th class="numeric">Loại Sản Phẩm</th>
                                  <th class="numeric">Sửa Sản Phẩm</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                    if(isset($_POST["Search"])){
                                        $NameSearch = $_POST["Search"];
                                        $data = GetProductSearch($NameSearch);
                                        foreach($data as $product){
                                ?>
                              <tr>
                                  <td><?php echo $product["id"] ?></td>
                                  <td><?php echo $product["Name"] ?></td>
                                  <td class="numeric"><?php echo number_format($product["Price"],0,",",".",);  ?></td>
                                  <td class="numeric"><?php echo $product["Quantity"]?></td>
                                  <td class="numeric"><?php 
                                        $Category = GetCategoryId($product["Category_id"]);
                                        foreach($Category as $category){
                                           echo $category["Name"];
                                        }
                                  ?></td>
                                <td>
                                    <form action="" method="post">
                                    <input type="hidden" value="<?php echo $product["id"] ?>" name="ProductId">
                                    <button type="submit" class="btn btn-outline-secondary" style="color: blue" name="UpdateProduct">Sửa</button>
                                    </form>
                                </td>
                              </tr>
                              <?php 
                                        }
                                    }
                              ?>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->

<?php 
    if(isset($_POST['UpdateProduct'])){
        $id = $_POST['ProductId'];
        ?>
            <h3><i class="fa fa-angle-right"></i>Suwarr thông tin</h3>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Thay đổi thông tin</h4>
                      <?php 
                        $data = GetProductId($id);
                        foreach($data as $product){
                        
                      ?>
                      <form class="form-horizontal style-form" action="" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tên Sản Phẩm</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo $product["Name"] ?>" name="NameProduct">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Giá Sản Phẩm</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo $product["Price"] ?>" name="PriceProduct">
                                  <span class="help-block">Giá Sản Phẩm tính theo đơn vị VNĐ</span>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">File Ảnh</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form"value="<?php echo $product["Image"] ?>" name="FileAnh">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Số Lượng Sản Phẩm hiện có</label>
                              <div class="col-sm-10">
                                  <input class="form-control" type="text" value="<?php echo $product["Quantity"] ?>" placeholder="Disabled input here..." name="QuantityProduct">
                                  <!-- id="disabledInput" -->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Chi Tiết Sản Phẩm</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" value="<?php echo $product["Detail"] ?>" placeholder="placeholder" name="DetailProduct">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Sale</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" value="<?php echo $product["Sale"] ?>" placeholder="placeholder" name="Sale">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Category</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control" value="<?php echo $product["Category_id"] ?>" placeholder="placeholder" name="Category">
                              </div>
                          </div>
                          <input type="hidden" value="<?php echo $id ?>" name="IdProduct">
                          <button type="submit" class="btn btn-theme" name="Update">Sửa</button>
                       
                      </form>
                      <?php
                        }
                      ?>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
        <?php

       
    } 
    if(isset($_POST['Update'])){
            $Name = $_POST["NameProduct"];
            $Price = $_POST["PriceProduct"];
            $FileAnh = $_POST["FileAnh"];
            $Quantity = $_POST["QuantityProduct"];
            $Sale = $_POST["Sale"];
            $Category = $_POST["Category"];
            $Detail = $_POST["DetailProduct"];
            $id = $_POST['IdProduct'];
            UpdateProduct($Name,$Price,$FileAnh,$Quantity,$Sale,$Category,$Detail,$id);
    }

?>




