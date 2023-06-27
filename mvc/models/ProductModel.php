<?php
    class ProductModel extends Database{
    public $data;
   
        
    // Get all record from table and store in $data
     function getProduct()
        {
         $sql = "SELECT product.*, brand.name as brand_name, category.name as category_name FROM product 
         LEFT JOIN brand ON product.brand_id = brand.id 
         LEFT JOIN category ON product.category_id = category.id";
         $result = $this->ProcessSQL($sql);

         $this->data=NULL;
         if($result==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
         return $result;
         
        }
        

        function getSingleProduct($id)
        {
         $sql = "SELECT product.*, brand.name as brand_name, category.name as category_name FROM product  
         LEFT JOIN brand ON product.brand_id = brand.id 
         LEFT JOIN category ON product.category_id = category.id 
         WHERE product.id = $id
         ";
         $result = $this->ProcessSQL($sql);

         $this->data=NULL;
         if($result==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
         return $result;
         
        }

        function getRelatedProduct($brand_id, $category_id)
        {
         $sql = "SELECT product.*, brand.name as brand_name, category.name as category_name FROM product  
         LEFT JOIN brand ON product.brand_id = brand.id 
         LEFT JOIN category ON product.category_id = category.id 
         WHERE brand.id = $brand_id
         OR category.id = $category_id
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
}
?>