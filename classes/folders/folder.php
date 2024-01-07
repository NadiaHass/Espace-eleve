<?php
require_once  'classes/dbh.php';

class Folder extends Dbh{

    protected function getAllFoldersByYear($year){
        $sql = 'SELECT * FROM folder Where year = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$year]);
        $result = $stmt->fetchAll();
        return $result;
    }


}
