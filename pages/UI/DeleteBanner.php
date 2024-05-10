<h3><i class="fa fa-angle-right"></i>Xóa Banner</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length">
                                    <h4><i class="fa fa-angle-right"></i>Xóa Banner</h4>
                                </div>
                             </div>
							 <div class="col-sm-12 col-md-6">
                                <div class="dataTables_filter">
                                <form action="" method="post">
                                <label>
                                    <input type="text" placeholder="Tìm Kiếm Theo Mã..." name="IdSearch" class="form-control form-control-sm">
                                    <button type="submit" class="btn btn-outline-dark">Tìm Kiếm theo Mã Banner</button> 
                                </label>
                                </form>
                            </div>
                         </div>
                      </div>

                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Mã Banner</th>
                                  <th>Ảnh Banner</th>
								  <th>Xóa Banner</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                    if(isset($_POST['IdSearch'])){
										$id = $_POST['IdSearch'];
                                        $data = GetBannerId($id);
                                        foreach($data as $product){
                                ?>
                              <tr>
                                  <td><?php echo $product["id"] ?></td>
                                  <td><img src="<?php echo $product["Image"]?>" width="100px"></td>
                                <td>
                                    <form action="" method="post">
                                    <input type="hidden" value="<?php echo $product["id"] ?>" name="IdBanner">
                                    <button type="submit" class="btn btn-outline-danger" style="color: red" name="DeleteBanner">Xóa</button>
                                    </form>
                                </td>
                              </tr>
                              <?php 
										}
                                    }
									else{
										$data = GetBanner();
                                        foreach($data as $product){
                                ?>
                              <tr>
                                  <td><?php echo $product["id"] ?></td>
                                  <td><img src="<?php echo $product["Image"]?>" width="100px"></td>
                                <td>
                                    <form action="" method="post">
                                    <input type="hidden" value="<?php echo $product["id"] ?>" name="IdBanner">
                                    <button type="submit" class="btn btn-outline-danger" style="color: red" name="DeleteBanner">Xóa</button>
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
    if(isset($_POST['DeleteBanner'])){
        $id = $_POST['IdBanner'];
        DeleteBanner($id);
    }

?>
