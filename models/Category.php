<?php 
//Category Model
class Category extends BaseModel {
    //All
    public function all(){
        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Create
    public function create($data){
        $sql = "INSERT INTO categories(cate_name) VALUES(:cate_name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Update
    public function update($id,$data){
        $sql = "UPDATE  categories SET cate_name=:cate_name WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $data['id']=$id;
        $stmt->execute($data);
    }
    //Delete
    public function delete($id){
        $sql = "DELETE FROM categories WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
    }
    //Search categories with id
    public function find($id){
        $sql = "SELECT * FROM categories WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=> $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}