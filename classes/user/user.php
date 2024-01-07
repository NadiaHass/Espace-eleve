<?php
require_once  'classes/dbh.php';

class User extends Dbh{
// it handles running sql statments inside database

    protected function getUserById($id){
        $sql = 'SELECT * 
        FROM users
        JOIN eleve ON users.id = eleve.id
        WHERE users.id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }
}