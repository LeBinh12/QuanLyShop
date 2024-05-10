<h3><i class="fa fa-angle-right"></i>Quản Lý Khách Hàng</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">    
                                <div class="dataTables_length">
                                    <h4><i class="fa fa-angle-right"></i>Quản lý các thông tin khách hàng</h4>
                                </div>
                             </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_filter">
                                <form action="" method="post">
                                <label>
                                    <input type="text" placeholder="Tìm Kiếm Theo Mã Hóa...?" name="Search" class="form-control form-control-sm">
                                    <button type="submit" class="btn btn-outline-dark">Tìm Kiếm</button> 
                                </label>
                                <label>
                                    <input type="text" placeholder="Tìm Kiếm Theo Tên...?" name="SearchName" class="form-control form-control-sm">
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
                                  <th>Tên Khách Hàng</th>
                                  <th>Mã Hàng</th>
                                  <th class="numeric">Số Điện Thoại</th>
                                  <th class="numeric">Tổng tiền Mua</th>
                                  <th class="numeric">Địa chỉ</th>
                                  <th class="numeric">Sửa Thông tin</th>
                                  <th class="numeric">Xóa Thông tin</th>
                              </tr> 
                              </thead>
                              <tbody>
                                <?php
                                    if(isset($_POST["Search"]) && $_POST['SearchName'] ==""){
										
                                        $NameSearch = $_POST["Search"];
										if($NameSearch == ""){
											?>
												<script>
													alert("Không được để trống");
												</script>
											<?php
										} else {
                                        $data = CustomerIdSearch($NameSearch);
										$count = 0;
                                        foreach($data as $product){
											


                                ?>
                              <tr>
                                  <td><?php echo $product["FullName"] ?></td>
                                  <td><?php echo $product["iddonhang"] ?></td>
                                  <td><?php echo $product["Phone"] ?></td>
                                  <td class="numeric"><?php echo number_format($product["Total"],0,",",".",);?>đ</td>
                                  <td class="numeric"><?php echo $product["Address"]?></td>
                                  <td class="numeric">
								  <form action="" method="post">
								  <input type="hidden" value="<?php echo $product["id"] ?>" name="CustomerId">
								  <button type="submit" class="btn btn-outline-danger" style="color: Green" name="UpdateCustomer">Sửa</button>
								  </td>
                                <td>
                                    <button type="submit" class="btn btn-outline-danger" style="color: red" name="DeleteCustomer">Xóa</button>
                                    </form>
                                </td>
                              </tr>
                              <?php 
                                        $count ++;
                                    } 
									if($count == 0  ){
										echo "<h1>Không có Khách Hàng này</h1>";
									}
								}
							}
                            if(isset($_POST['SearchName']) && $_POST["Search"] ==""){
                                $Name = $_POST["SearchName"];
								if($Name == ""){
											?>
												<script>
													alert("Không được để trống");
												</script>
											<?php
								} else {
                                    $data = CustomerSearch($Name);
                                    $count = 0;
                                    foreach($data as $product){                                                
                                ?>
                              <tr>
                                  <td><?php echo $product["FullName"] ?></td>
                                  <td><?php echo $product["iddonhang"] ?></td>
                                  <td><?php echo $product["Phone"] ?></td>
                                  <td class="numeric"><?php echo number_format($product["Total"],0,",",".",);?>đ</td>
                                  <td class="numeric"><?php echo $product["Address"]?></td>
                                  <td class="numeric">
								  <form action="" method="post">
								  <input type="hidden" value="<?php echo $product["id"] ?>" name="CustomerId">
								  <button type="submit" class="btn btn-outline-danger" style="color: Green" name="UpdateCustomer">Sửa</button>
								  </td>
                                <td>
                                    <button type="submit" class="btn btn-outline-danger" style="color: red" name="DeleteCustomer">Xóa</button>
                                    </form>
                                </td>
                              </tr>
                              <?php 
                                        $count ++;
                                    } 
									if($count == 0  ){
										echo "<h1>Không có Khách Hàng này</h1>";
									}
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
    if(isset($_POST['DeleteOrderDetail'])){
        $id = $_POST['IdOrderDetail'];
        DeleteCustomer($id);
    }
	if(isset($_POST['UpdateCustomer'])){
        $id = $_POST['CustomerId'];

        ?>
		<h3><i class="fa fa-angle-right"></i> Form Components</h3>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                      <?php 
                        $data = CustomerId($id);
                        foreach($data as $customer){
                      ?>
                      <form class="form-horizontal style-form" action="" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Full Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" value="<?php echo $customer["FullName"] ?>" name="FullName">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Quốc Gia</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" value="<?php echo $customer["National"] ?>" name="National">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Địa Chỉ</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" value="<?php echo $customer["Address"]?>" name="Address">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Thành Phố Hoặc Nông Thôn</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" value="<?php echo $customer["TownOrCity"] ?>" name="TownOrCity">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Số Điện Thoại</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" value="<?php echo $customer["Phone"] ?>" name="Phone">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Địa chỉ Email</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" value="<?php echo $customer["Email"] ?>" name="Email">
                              </div>
                          </div>
						  <input type="hidden" value="<?php echo $id?>" name="IdCustomer">        
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
		$id = $_POST['IdCustomer'];
        $FullName = $_POST['FullName'];
        $National = $_POST['National'];
        $Address = $_POST['Address'];
        $TownOrCity = $_POST['TownOrCity'];
        $Phone = $_POST['Phone'];
        $Email = $_POST['Email'];

        UpdateCustomer($id,$FullName,$National,$Address,$TownOrCity,$Phone,$Email);
	}

?>
