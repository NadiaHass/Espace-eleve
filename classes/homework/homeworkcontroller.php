<?php
require_once 'classes/homework/homework.php';

class HomeWorkController extends HomeWork{
    public function insertSubmission($student_id, $homework_id) {
        $this->setSubmission($student_id, $homework_id);
    }

}