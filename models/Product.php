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
    public function listProductCategory($id){
        $sql="SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id = c.id WHERE c.id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Add
    public function create($data){
        $sql="INSERT INTO 
        products(name, image, price, description, content, status, category_id) 
        VALUES(:name, :image, :price, :description, :content, :status, :category_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Update
    public function update($id, $data){
        $sql="UPDATE 
        products SET name=:name, image=:image, price=:price, description=:description, content=:content, status=:status, category_id=:category_id
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
    public function find($id){
        $sql="SELECT p.*, cate_name FROM products p JOIN categories c ON p.categories_id = c.id WHERE p.id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
}