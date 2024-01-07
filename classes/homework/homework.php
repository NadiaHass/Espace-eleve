<?php
require_once  'classes/dbh.php';

class HomeWork extends Dbh {
    
    public function getHomeWorksByClassYear($class, $year) {
        $sql = 'SELECT * FROM devoir WHERE class = ? AND year = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$class, $year]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getHomeWorkById($id){
        $sql = 'SELECT * FROM devoir WHERE id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function isHomeWorkSubmitted($homeworkid , $studentid){
        $sql = 'SELECT id FROM submission WHERE homework_id = ? AND student_id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$homeworkid , $studentid]);
        $result = $stmt->fetch();
        return !empty($result);
    }

    public function getHomeWorkMark($homeworkid , $studentid){
        $sql = 'SELECT mark FROM submission WHERE homework_id = ? AND student_id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$homeworkid , $studentid]);
        $result = $stmt->fetch();
        return $result;
    }


    public function getHomeWorkComment($homeworkid , $studentid){
        $sql = 'SELECT comments FROM submission WHERE homework_id = ? AND student_id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$homeworkid , $studentid]);
        $result = $stmt->fetch();
        return $result;
    }



    public function setSubmission($student_id, $homework_id) {
        if(!($this->submissionExists($student_id , $homework_id))){
            $sql = "INSERT INTO submission (student_id, homework_id, submission_date) VALUES (?, ?, NOW())";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$student_id, $homework_id]);
    
        }

    }

    private function submissionExists($student_id, $homework_id) {
        $sql = "SELECT COUNT(*) FROM submissions WHERE student_id = ? AND homework_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$student_id, $homework_id]);
        $count = $stmt->fetchColumn();
        return $count > 0;
    }

    
}
