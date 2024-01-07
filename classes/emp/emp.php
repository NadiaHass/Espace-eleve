<?php
require_once  'classes/dbh.php';

class Emp extends Dbh{
    
    protected function getEmpByClassYear($class , $year){
        $sql = 'SELECT * FROM emp WHERE annee = ? AND year = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$class , $year]);
        $result = $stmt->fetch();
        return $result;
    }

}