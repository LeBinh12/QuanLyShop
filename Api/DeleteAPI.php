<?php 
function DeleteProduct($id){
    $url = "http://127.0.0.1:8000/api/DeleteProduct/".$id;
    $ch = curl_init();
    
   

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
   

     $response = curl_exec($ch);
    if($response === false){
        echo "CURL Error: " . curl_error($ch);
        
    }else {
        ?>
        <script>
          window.location.href = "index.php";
          </script>
        <?php
        return $response;  
    }
}

function DeleteBanner($id){
    $url = "http://127.0.0.1:8000/api/DeleteBanner/".$id;
    $ch = curl_init();
    
   

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
   

     $response = curl_exec($ch);
    if($response === false){
        echo "CURL Error: " . curl_error($ch);
        
    }else {
        ?>

        <script>
        alert("Bạn đã xóa Banner có mã: ".$id);
        window.location.href = "index.php";
          </script>
        <?php
        return $response;  
    }
}

function DeleteCategory($id){
    $url = "http://127.0.0.1:8000/api/DeleteCategory/".$id;
    $ch = curl_init();
    
   

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
   

     $response = curl_exec($ch);
    if($response === false){
        echo "CURL Error: " . curl_error($ch);
        
    }else {
        ?>

        <script>
        alert("Bạn đã xóa Loại sản phẩm có mã: ".$id);
        window.location.href = "index.php";
          </script>
        <?php
        return $response;  
    }
}
function DeleteOrderDetail($id){
    $url = "http://127.0.0.1:8000/api/DeleteOrderDetail/".$id;
    $ch = curl_init();
    
   

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
   

     $response = curl_exec($ch);
    if($response === false){
        echo "CURL Error: " . curl_error($ch);
        
    }else {
        ?>

        <script>
        alert("Bạn đã xóa Đơn Hàng có mã: ".$id);
        window.location.href = "index.php";
          </script>
        <?php
        return $response;  
    }
}
function DeleteCustomer($id){
    $url = "http://127.0.0.1:8000/api/DeleteCustomer/".$id;
    $ch = curl_init();
    
   

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
   

     $response = curl_exec($ch);
    if($response === false){
        echo "CURL Error: " . curl_error($ch);
        
    }else {
        ?>

        <script>
        alert("Bạn đã xóa Đơn Hàng có mã: ".$id);
        window.location.href = "index.php";
          </script>
        <?php
        return $response;  
    }
}




?>