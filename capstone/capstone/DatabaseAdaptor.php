<?php

// Author: Zejun Li
class DatabaseAdaptor
{
    
    private $DB;
    public function __construct()
    {
        $dataBase = 'mysql:dbname=fooddb;charset=utf8;host=127.0.0.1';
        $user = 'root';
        $password = ''; // Empty string with XAMPP install
        try {
            $this->DB = new PDO($dataBase, $user, $password);
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo ('Error establishing Connection');
            exit();
        }
    }
    
    public function getFood($input)
    {
        $stmt = $this->DB->prepare("SELECT * FROM foodtbl WHERE categories_en LIKE'%".$input."%' ORDER BY Food_item_score DESC;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getOneFood($input)
    {
        $stmt = $this->DB->prepare("SELECT * FROM foodtbl WHERE product_name ='" . $input . "%';");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}