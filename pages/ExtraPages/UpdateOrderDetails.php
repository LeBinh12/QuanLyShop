<h3><i class="fa fa-angle-right"></i>Quản Lý Các Đơn Hàng</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">    
                                <div class="dataTables_length">
                                    <h4><i class="fa fa-angle-right"></i>Quản lý các thông tin đơn hàng</h4>
                                </div>
                             </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_filter">
                                <form action="" method="post">
                                <label>
                                    <input type="text" placeholder="Tìm Kiếm Mã Đơn Hàng...?" name="Search" class="form-control form-control-sm">
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
                                  <th>Mã Đơn Hàng</th>
                                  <th>Số Lượng</th>
                                  <th class="numeric">Price</th>
                                  <th class="numeric">Status</th>
                                  <th class="numeric">Sửa</th>
                                  <th class="numeric">Xóa Đơn Hàng</th>
                              </tr> 
                              </thead>
                              <tbody>
                                <?php
                                    if(isset($_POST["Search"])){
										
                                        $NameSearch = $_POST["Search"];
										if($NameSearch == ""){
											?>
												<script>
													alert("Không được để trống");
												</script>
											<?php
										} else {
                                        $data = OrderDetailsId($NameSearch);
										$count = 0;
                                        foreach($data as $product){
											


                                ?>
                              <tr>
                                  <td><?php echo $product["iddonhang"] ?></td>
                                  <td><?php echo $product["Quantity_Details"] ?></td>
                                  <td class="numeric"><?php echo number_format($product["Price"],0,",",".",);  ?></td>
                                  <td class="numeric"><?php echo $product["Status"]?></td>
                                  <td class="numeric">
								  <form action="" method="post">
								  <input type="hidden" value="<?php echo $product["id"] ?>" name="IdOrderDetail">
								  <button type="submit" class="btn btn-outline-danger" style="color: Green" name="UpdateOrderDetail">Sửa</button>
								  </td>
                                <td>
                                    <button type="submit" class="btn btn-outline-danger" style="color: red" name="DeleteOrderDetail">Xóa</button>
                                    </form>
                                </td>
                              </tr>
                              <?php 
                                        $count ++;
                                    } 
									if($count == 0){
										echo "<h1>Không có Hóa Đơn</h1>";
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
        DeleteOrderDetail($id);
    }
	if(isset($_POST['UpdateOrderDetail'])){
        $id = $_POST['IdOrderDetail'];

        ?>
		<h3><i class="fa fa-angle-right"></i> Form Components</h3>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                      <form class="form-horizontal style-form" action="" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="Status">
                              </div>
                          </div>
						  <input type="hidden" value="<?php echo $id?>" name="IdDetail">        
                          <button type="submit" class="btn btn-theme" name="Update">Sửa</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->

		<?php
		
    }
	if(isset($_POST['Update'])){
		$id = $_POST['IdDetail'];
		$Status = $_POST['Status'];
		UpdateStatus($id, $Status);
	}

?>
