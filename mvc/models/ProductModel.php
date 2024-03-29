<?php
    class ProductModel extends Database{
    public $data;
   
        
    // Get all record from table and store in $data
     function getProduct()
        {
         $sql = "SELECT products.*, brands.name as brand_name, categories.name as category_name FROM products 
         LEFT JOIN brands ON products.brand_id = brands.id 
         LEFT JOIN categories ON products.category_id = categories.id";
         $result = $this->ProcessSQL($sql);

         $this->data=NULL;
         if($result==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
         return $result;
         
        }
        

        function getSingleProduct($id)
        {
         $sql = "SELECT products.*, brands.name as brand_name, categories.name as category_name FROM products  
         LEFT JOIN brands ON products.brand_id = brands.id 
         LEFT JOIN categories ON products.category_id = categories.id 
         WHERE products.id = $id
         ";
         $result = $this->ProcessSQL($sql);

         $this->data=NULL;
         if($result==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
         return $result;
         
        }

        function getRelatedProduct($brand_id, $category_id)
        {
         $sql = "SELECT products.*, brands.name as brand_name, categories.name as category_name FROM products  
         LEFT JOIN brands ON products.brand_id = brands.id 
         LEFT JOIN categories ON products.category_id = categories.id 
         WHERE brands.id = $brand_id
         OR categories.id = $category_id
         ";
         $result = $this->ProcessSQL($sql);

         $this->data=NULL;
         if($result==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
         return $result;
         
        }
       
 // Add record to table
        function Addproduct($name,$description,$image)
        {
         $sql = "INSERT INTO product VALUES (NULL, ?, ?, ?)";
         $data[] = $name;
         $data[] = $description;
         $data[] = $image;
          $result = $this->ProcessSQL($sql,$data);
         return $result;
        }
        
        function countProducts(){     
            
            $sql = "SELECT COUNT(*) as total_products  FROM products ";
            $result = $this -> ProcessSQL($sql);
            if($result==FALSE)
               return NULL;
            else
            {
               $row = $this->pdo_stm->fetch();
               return $row["total_products"];
            }
        }

        function productList($start, $limit){
            $sql = "SELECT products.*, brands.name as brand_name, categories.name as category_name FROM products  
            LEFT JOIN brands ON products.brand_id = brands.id 
            LEFT JOIN categories ON products.category_id = categories.id  
            LIMIT $start, $limit";
            $result = $this -> ProcessSQL($sql);
            if($result==FALSE)
               return NULL;
            else
            {
               return $this -> pdo_stm->fetchAll();
            }
        }
}
?>