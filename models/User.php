<?php

class User extends BaseModel {
    //lấy toàn bộ user
    public function all(){
        $sql = "SELECT * FROM user";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    // lấy ra 1 user 
    public function find($id){
        $sql = "SELECT * FROM user WHERE id =:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // lấy ra 1 user theo email
    public function findUserOfEmail($email){
        $sql = "SELECT * FROM user WHERE email =:email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // thêm 1 user
    public function create($data){
        $sql = "INSERT INTO user(fullname, email, password, phone, address) VALUES (:fullname, :email, :password, :phone, :address)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);

    }

    // cập nhật user
    public function update($id, $data){
        $sql = "UPDATE user SET fullname=:fullname, phone=:phone, address=:address, role=:role, active=:active WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        // thêm id vào data
        $data['id'] = $id;
        $stmt->execute($data);
    }

    // cập nhập hoạt động của user (active)
    public function updateActive($id, $active) {
        $sql = "UPDATE user SET active=:active WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id, 'active' => $active]);
    }
}