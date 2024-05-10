<?php

    function Login($email,$password){
        $url = "http://127.0.0.1:8000/api/Login";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $data = [
            "email" => $email,
            "password" => $password
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
       if($response === false){
          
           echo "CURL Error: " . curl_error($ch);
           
       }else {
        $data = json_decode($response, true);
        if($data){
            if($data["status"] == 200){
                ?>
                <script>
                  window.location.href = "index.php";
                  </script>
                <?php
            } else{
                ?>
                    <script>
                        alert("Sai Email hoac mat khau!");
                    </script>
                <?php
            }
        } else{
            echo "Lỗi: Không thể phân tích phản hồi JSON từ API.";

        }
        return $response;
       }
    }

    function AddProduct($Name,$Price,$Image,$Quantity,$Sale,$Category,$Details){
        $url = "http://127.0.0.1:8000/api/AddProduct";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $data = [
            "Name" => $Name,
            "Price" => $Price,
            "Quantity" => $Quantity,
            "Image" => $Image,
            "Details" => $Details,
            "Category_id" => $Category,
            "Sale"=>$Sale,
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
       if($response === false){
          
           echo "CURL Error: " . curl_error($ch);
           
       }else {
        ?>
            <script>
                alert("Sửa Sản phẩm thành công!");
            </script>
        <?php
           return $response;
           
       }
    }

    function UpdateProduct($Name,$Price,$Image,$Quantity,$Sale,$Category,$Details,$id){
        $url = "http://127.0.0.1:8000/api/UpdateProduct/$id";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $data = [
            "Name" => $Name,
            "Price" => $Price,
            "Quantity" => $Quantity,
            "Image" => $Image,
            "Details" => $Details,
            "Category_id" => $Category,
            "Sale"=>$Sale,
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
       if($response === false){
          
           echo "CURL Error: " . curl_error($ch);
           
       }else {
        ?>
            <script>
                alert("Sửa Sản phẩm thành công!");
            </script>
        <?php
           return $response;
           
       }
    }

    function AddBanner($Image){
        $url = "http://127.0.0.1:8000/api/AddBanner";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $data = [
            "Image" => $Image,
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
       if($response === false){
          
           echo "CURL Error: " . curl_error($ch);
           
       }else {
        ?>
            <script>
                alert("Thêm Banner thành công!");
            </script>
        <?php
           return $response;
           
       }
    }
    function AddCategory($Name,$Image){
        $url = "http://127.0.0.1:8000/api/AddCategory";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $data = [
            "Name" => $Name,
            "Image" => $Image,
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
       if($response === false){
          
           echo "CURL Error: " . curl_error($ch);
           
       }else {
        ?>
            <script>
                alert("Thêm Loại Mới thành công!");
            </script>
        <?php
           return $response;
           
       }
    }
    function UpdateCategory($id,$Name,$Image){
        $url = "http://127.0.0.1:8000/api/UpdateCategory/$id";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $data = [
            "Name" => $Name,
            "Image" => $Image,
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
       if($response === false){
          
           echo "CURL Error: " . curl_error($ch);
           
       }else {
        ?>
            <script>
                alert("Đã sửa Loại thành công!");
            </script>
        <?php
           return $response;
           
       }
    }

    function UpdateStatus($id,$Status){
        $url = "http://127.0.0.1:8000/api/UpdateStatus/$id";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $data = [
            "status"=>$Status
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
       if($response === false){
          
           echo "CURL Error: " . curl_error($ch);
           
       }else {
        ?>
            <script>
                alert("Đã sửa Loại thành công!");
            </script>
        <?php
           return $response;
           
       }
    }
    function UpdateCustomer($id,$FullName,$National,$Address,$TownOrCity,$Phone,$Email){
        $url = "http://127.0.0.1:8000/api/UpdateCustomer/$id";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $data = [
            "FullName" => $FullName,
            "National" => $National,
            "Address" => $Address,
            "TownOrCity" => $TownOrCity,
            "Phone" => $Phone,
            "Email" => $Email
        ];

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
       if($response === false){
          
           echo "CURL Error: " . curl_error($ch);
           
       }else {
        ?>
            <script>
                alert("Đã sửa Thông tin Khách Hàng thành công!");
            </script>
        <?php
           return $response;
           
       }
    }
    
?>