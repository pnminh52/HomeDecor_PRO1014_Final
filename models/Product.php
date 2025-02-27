<?php
//Product Model
class Product extends BaseModel{
    //Get all products information
    public function all(){
        $sql="SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id = c.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Get categories information
    public function listProductCategory($id, $sort = '') {
        $orderBy = '';
        if ($sort === 'asc') {
            $orderBy = 'ORDER BY price ASC';
        } elseif ($sort === 'desc') {
            $orderBy = 'ORDER BY price DESC';
        }
        $sql = "SELECT p.*, cate_name FROM products p
                JOIN categories c ON p.category_id = c.id
                WHERE c.id = :id $orderBy";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function listProductCategoryHome($id){
        $sql="SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id = c.id WHERE c.id=:id ORDER BY id DESC LIMIT 4";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //!!Đây là hàm danh sách các sản phẩm có liên quan
    public function listProductRelead($category_id,$id){
        $sql="SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id = c.id WHERE c.id=:category_id AND p.id <> :id ORDER BY id DESC LIMIT 4";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id,'category_id' => $category_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Add
    public function create($data)
    {
        $sql = "INSERT INTO products(name, image, price, quantity, description, content, status, category_id)
                VALUES(:name, :image, :price, :quantity, :description, :content, :status, :category_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Update
    public function update($id, $data){
        $sql="UPDATE 
        products SET name=:name, image=:image, price=:price, quantity=:quantity, description=:description, content=:content, status=:status, category_id=:category_id
        WHERE id =:id";
        $stmt = $this->conn->prepare($sql);
        $data['id'] = $id;
        $stmt->execute($data);
        
    }
    //Delete
    public function delete($id){
        $sql="DELETE FROM products WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
    //Search product by id
    public function find($id) {
        $sql = "SELECT p.*, c.cate_name 
                FROM products p 
                JOIN categories c 
                ON p.category_id = c.id 
                WHERE p.id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }
    public function search($query) {
        $sql = "SELECT p.*, c.cate_name 
                FROM products p 
                JOIN categories c ON p.category_id = c.id 
                WHERE p.name LIKE :query";
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['query' => '%' . $query . '%']); 
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
    //!!Hàm này show tất cả sản phẩm
    public function showAllProducts($sort = 'price', $order = 'ASC') {
        $orderBy = "ORDER BY price $order";
        $sql = "SELECT p.*, c.cate_name 
                FROM products p 
                JOIN categories c ON p.category_id = c.id 
                $orderBy";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
      
}