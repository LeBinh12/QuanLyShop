<h3><i class="fa fa-angle-right"></i>Xóa sản phẩm</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length">
                                    <h4><i class="fa fa-angle-right"></i>Xóa sản phẩm cần bỏ</h4>
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
                                  <th class="numeric">Xóa Sản Phẩm</th>
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
                                    <button type="submit" class="btn btn-outline-danger" style="color: red" name="DeleteProduct">Xóa</button>
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
    if(isset($_POST['DeleteProduct'])){
        $id = $_POST['ProductId'];
        DeleteProduct($id);
    }

?>
