<?php

    function GetCategory(){
        $url = "http://127.0.0.1:8000/api/Category";
        $curl =curl_init($url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

        $response = curl_exec($curl);

        if($response){
            $data = json_decode($response, true);
            $arr = array();
            if($data){
                //Duyet cac danh sach co trong mang Category
                foreach($data["data"] as $category){
                    $arr[] = $category;
                }
                return $arr;
            } else{
                echo "Lỗi: Không thể phân tích phản hồi JSON từ API.";
            }
        } else{
            echo "Lỗi không kết nói được với API";
        }
    }
    function GetProductCategory($id){
    $url = "http://127.0.0.1:8000/api/ProductCategory/$id";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);

    if($response){
        $data = json_decode($response, true);
        $arr = array();
        if($data){
            foreach($data["data"] as $Product){
               $arr[] = $Product; 
            }
            return $arr;
        }
    }
    }
    
    function GetCategoryId($id){
        $url = "http://127.0.0.1:8000/api/CategoryId/$id";
        $curl =curl_init($url);
    
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);
    
        $response = curl_exec($curl);
    
        if($response){
            $data = json_decode($response, true);
            $arr = array();
            if($data){
                foreach($data["data"] as $Product){
                   $arr[] = $Product; 
                }
                return $arr;
            }
        }
        }
    
    function GetProductSearch($NameSearch){
        $url = "http://127.0.0.1:8000/api/Search/$NameSearch";
        $curl =curl_init($url);
    
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);
    
        $response = curl_exec($curl);
    
        if($response){
            $data = json_decode($response, true);
            $arr = array();
            if($data){
                foreach($data["data"] as $Product){
                   $arr[] = $Product; 
                }
                return $arr;
            }
        }
    }
    function GetProductId($id){
        $url = "http://127.0.0.1:8000/api/Product/$id";
        $curl =curl_init($url);
    
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);
    
        $response = curl_exec($curl);
    
        if($response){
            $data = json_decode($response, true);
            $arr = array();
            if($data){
                foreach($data["data"] as $Product){
                   $arr[] = $Product; 
                }
                return $arr;
            }
        }
    }
    function GetBanner(){
            $url = "http://127.0.0.1:8000/api/Banner";
            $curl =curl_init($url);
        
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);
        
            $response = curl_exec($curl);
        
            if($response){
                $data = json_decode($response, true);
                $arr = array();
                if($data){
                    foreach($data["data"] as $Product){
                       $arr[] = $Product; 
                    }
                    return $arr;
                }
            }
    }
    function GetBannerId($id){
        $url = "http://127.0.0.1:8000/api/Banner/$id";
        $curl =curl_init($url);
    
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);
    
        $response = curl_exec($curl);
    
        if($response){
            $data = json_decode($response, true);
            $arr = array();
            if($data){
                foreach($data["data"] as $Product){
                    
                   $arr[] = $Product; 
                }
                return $arr;
            } 
        }
}

function OrderDetailsId($id){
    $url = "http://127.0.0.1:8000/api/OrderDetailSearch/$id";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);
    
    if($response){
        $data = json_decode($response, true);
        $arr = array();
        if($data){
            foreach($data["data"] as $Product){
                
               $arr[] = $Product; 
            } 
            return $arr;
        }
    }
}
function CustomerIdSearch($id){
    $url = "http://127.0.0.1:8000/api/CustomerIdSearch/$id";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);
    
    if($response){
        $data = json_decode($response, true);
        $arr = array();
        if($data){
            foreach($data["data"] as $Product){
                
               $arr[] = $Product; 
            } 
            return $arr;
        }
    }
}

function CustomerId($id){
    $url = "http://127.0.0.1:8000/api/CustomerId/$id";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);
    
    if($response){
        $data = json_decode($response, true);
        $arr = array();
        if($data){
            foreach($data["data"] as $Product){
                
               $arr[] = $Product; 
            } 
            return $arr;
        }
    }
}
function CustomerSearch($Name){
    $url = "http://127.0.0.1:8000/api/SearchCustomer/$Name";
    $curl =curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

    $response = curl_exec($curl);
    
    if($response){
        $data = json_decode($response, true);
        $arr = array();
        if($data){
            foreach($data["data"] as $Product){
                
               $arr[] = $Product; 
            } 
            return $arr;
        }
    }
}








?>