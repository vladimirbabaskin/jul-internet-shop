<?php


class Product {
    /**
     *
     * @var mysqli
     */
    private $db;
    
    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($this->db->connect_errno !==0){
            die($this->db->connect_error);
        }
    }
    
    public function all() {
//        var_dump($this->db);
        $query = "SELECT * FROM products";
        $result = $this->db->query($query);
        if(!$result){
            die($this->db->error);
        }
//        var_dump($result);
        $products = $result->fetch_all(MYSQLI_ASSOC);
//        $products = $result->fetch_assoc();
//        var_dump($products);
        return $products;
    }
}
