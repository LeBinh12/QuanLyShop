<h3><i class="fa fa-angle-right"></i>Sửa Loại Sản Phẩm</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length">
                                    <h4><i class="fa fa-angle-right"></i> Sửa Loại</h4>
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
                              <th>Mã Loại</th>
                                  <th>Tên Loại</th>
								  <th>Ảnh Banner</th>
								  <th>Sửa Loại</th>

                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                    if(isset($_POST['IdSearch'])){
										$id = $_POST['IdSearch'];
                                        $data = GetCategoryId($id);
                                        foreach($data as $product){
                                ?>
                              <tr>
                                  <td><?php echo $product["id"] ?></td>
								  <td><?php echo $product["Name"] ?></td>
                                  <td><img src="<?php echo $product["Image"]?>" width="100px"></td>
                                <td>
                                    <form action="" method="post">
                                    <input type="hidden" value="<?php echo $product["id"] ?>" name="IdCategory">
                                    <button type="submit" class="btn btn-outline-danger" style="color: red" name="UpdateCategory">Sửa</button>
                                    </form>
                                </td>
                              </tr>
                              <?php 
										}
                                    }
									else{
										$data = GetCategory();
                                        foreach($data as $product){
                                ?>
                              <tr>
                                  <td><?php echo $product["id"] ?></td>
								  <td><?php echo $product["Name"] ?></td>
                                  <td><img src="<?php echo $product["Image"]?>" width="100px"></td>
                                <td>
                                    <form action="" method="post">
                                    <input type="hidden" value="<?php echo $product["id"] ?>" name="IdCategory">
                                    <button type="submit" class="btn btn-outline-danger" style="color: green" name="UpdateCategory">Sửa</button>
                                    </form>
                                </td>
                              </tr><?php
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
    if(isset($_POST['UpdateCategory'])){
        $id = $_POST['IdCategory'];
        ?>
            <h3><i class="fa fa-angle-right"></i> Form Update</h3>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Form Nhập</h4>
                      <?php 
                        $data = GetCategoryId($id);
                        foreach($data as $Category){                       
                      ?>
                      <form class="form-horizontal style-form" action="" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tên Loại Sản Phẩm</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" value="<?php echo $Category["Name"]  ?>" name="NameCategory">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">File Ảnh</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" value="<?php echo $Category["Image"] ?>" name="FileAnh">
                              </div>
                          </div>
                          <input type="hidden" value="<?php echo $id ?>" name="IdCategories">
                          <button type="submit" class="btn btn-theme" name="Update" style="color : green">Sửa</button>
                       
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
            $Name = $_POST["NameCategory"];
            $FileAnh = $_POST["FileAnh"];
            
            $id = $_POST['IdCategories'];
            UpdateCategory($id,$Name,$FileAnh);

    }

?>




