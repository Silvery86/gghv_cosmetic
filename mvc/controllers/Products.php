<?php
    class Products extends Controller{
        function index(){
            

                $products = $this -> model("ProductModel");
                
                $num_products = $products -> countProducts();
                $limit = 9;

                if($num_products==NULL){
                    die("<h3> LỖI TRUY VẤN CSDL</h3>");
                }
                $total_pages = ceil($num_products/$limit);
                $current_page = 1;
                if(isset($_REQUEST["page"]) && is_numeric($_REQUEST["page"]))
                {
                    $current_page = $_REQUEST["page"];
                }
                if($current_page<=0) //nếu trang cần hiển thị <=0 thì gán về trang 1
                    $current_page=1;
                if($current_page>$total_pages)//nếu vượt quá tổng số trang thì gán bằng trang cuối
                    $current_page = $total_pages;
                //B5. Tính vị trí đầu tiên của bản ghi cần truy vấn ứng số vị trí trang cần hiển thị
                $start = ($current_page-1) * $limit;
                $products_list = $products -> productList($start,$limit);    
               
                $this -> view("default-layout",
                ["page" => "products", 
                "products_list" => $products_list, 
                "total_pages" => $total_pages,
                "current_page" => $current_page,
                "limit" => $limit,
                "start" => $start,
                "num_products" => $num_products,
                ]
                );
            }
        function product($param){
            
            
            if($param == "products" | $param == "home" | $param == "aboutus" | $param == "contact" | $param == "viewcart" | $param == "checkout" | $param == "user" | $param == "logout"){
                header("Location:"."http://localhost/gghv_cosmetic/".$param."");
            }
            
            
            else{
                $params = explode("=", filter_var(trim($param,"/")));
                
                $product = $this -> model("ProductModel");
                $result = $product -> getSingleProduct($param);
                if($result == False){

                    if($param == "addtocart=".$params[1].""){
                        $cart = $this -> model("CartModel");
                        $productId = $params[1];

                        if($productId=="" || is_numeric($productId)==false){
                            echo "id must be a number";
                            
                        }else{
                            if (isset($_SESSION['cart'][$productId])) {
                            
                                //nếu đã có sp trong giỏ hàng thì số lượng công thêm $number
                                $_SESSION['cart'][$productId]['quantity']++;
                            } else {
                                $cart -> addCart($productId);
                            }
                        }
                        header("Location:"."http://localhost/gghv_cosmetic/products/product/".$params[1]."");
                    }if($param == "viewcart"){
                        header("Location:"."http://localhost/gghv_cosmetic/viewcart");
                    }else{
                        $this -> view("product-layout",
                        ["page" => "error404"]
                    );
                    }
                   
                }
                $result_data = $product -> data;
                $this -> view("product-layout",
                ["page" => "product","product" => $result_data]
                );
            }
              
        }

        function page($param){

            if($param == "products" | $param == "home" | $param == "aboutus" | $param == "contact" | $param == "viewcart" | $param == "checkout" | $param == "user" | $param == "logout"){
                header("Location:"."http://localhost/gghv_cosmetic/".$param."");
            }
            if($param == "cart"){
                $urlArr = explode("/", filter_var(trim($_GET["url"],"/")));
                $cart = $this -> model("CartModel");
                $productId = $urlArr[4];
                $cart -> addCart($productId);
                header("Location:"."http://localhost/gghv_cosmetic/products/page/".$_SESSION["page"]."");
                
            }
            if($param == "products"){
                $urlArr = explode("/", filter_var(trim($_GET["url"],"/")));
                
                header("Location:"."http://localhost/gghv_cosmetic/products/product/".$urlArr[4]."");
                
            }
            $products = $this -> model("ProductModel");         
            
            
            $num_products = $products -> countProducts();
            $limit = 9;

            if($num_products==NULL){
                die("<h3> LỖI TRUY VẤN CSDL</h3>");
            }
            $total_pages = ceil($num_products/$limit);
            $current_page = $param;
            $_SESSION["page"] = $param;
            if(isset($_REQUEST["page"]) && is_numeric($_REQUEST["page"]))
            {
                $current_page = $_REQUEST["page"];
            }
            if($current_page<=0) //nếu trang cần hiển thị <=0 thì gán về trang 1
                $current_page=1;
            if($current_page>$total_pages)//nếu vượt quá tổng số trang thì gán bằng trang cuối
                $current_page = $total_pages;
            //B5. Tính vị trí đầu tiên của bản ghi cần truy vấn ứng số vị trí trang cần hiển thị
            $start = ($current_page-1) * $limit;
            $products_list = $products -> productList($start,$limit);    
               
                $this -> view("product-layout",
                ["page" => "products", 
                "products_list" => $products_list, 
                "total_pages" => $total_pages,
                "current_page" => $current_page,
                "limit" => $limit,
                "start" => $start,
                "num_products" => $num_products,
                ]
                );
        }
        
        

    }
   
?>