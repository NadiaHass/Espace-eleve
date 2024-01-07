<?php
require_once  'classes/dbh.php';

class Activity extends Dbh{
    
    protected function getAllActivities(){
        $sql = 'SELECT * FROM activity';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }


    protected function getActivityById($id){
        $sql = 'SELECT * 
        FROM activity
        WHERE id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    
}