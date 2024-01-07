<?php
require_once 'classes/homework/homework.php';

class HomeWorkView extends HomeWork {

    public function printHomeWorksByClassYear($class, $year) {
        $homeworks = $this->getHomeWorksByClassYear($class, $year);

        if (!empty($homeworks)) {
            echo '<table>';
            echo '<tr>';
            echo '<th>Matière</th>';
            echo '<th>Numéro du Devoir</th>';
            echo '<th>Titre du Devoir</th>';
            echo '<th>Date Limite</th>';
            echo '</tr>';

            foreach ($homeworks as $homework) {
                echo '<tr>';
                echo '<td>' . $homework['matiere'] . '</td>';
                echo '<td>' . $homework['number'] . '</td>';
                echo '<td>' . $homework['title'] . '</td>';
                echo '<td>' . $homework['deadline'] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo "No homeworks found for the specified class and year.";
        }
    }


    public function printSubmitPage($homeworkid , $studentid){
        $submitted = $this->isHomeWorkSubmitted($homeworkid , $studentid);

        if($submitted){
            $this->printHomeWorkMark($homeworkid , $studentid);
        }else{
            $this->printHomeWorkById($homeworkid);
        }
    }


    public function printHomeWorkById($id){
        $homework = $this->getHomeWorkById($id);

        echo "<div class='title-wrapper'>";
        echo "<h2 class='title'>" . $homework['title'] . "</h2>";
        echo "<br>";
        echo "<p class='title'>" . $homework['deadline'] . "</p>";
        echo "</div>";
    
        echo "<div class='description-wrapper'>";
        echo "<p>" . $homework['description'] . "</p>";
        echo "</div>";
    
        if (!empty($homework['linkForm'])) {
            echo "<iframe src='" . $homework['linkForm'] . "' width='100%' height='400' frameborder='0' style='border:0' allowfullscreen></iframe><br><br><br><br><br>";
        } else {
            echo "Google Form Link is not available.<br>";
        }

        echo "<form method='post'>
        <input type='hidden' name='submit_homework' value='clicked'>
        <button id='complete-button' type='submit'>Completed</button>
        </form>
        ";

        }


    public function printHomeWorkMark($homeworkid , $studentid){
        $mark = $this->getHomeWorkMark($homeworkid , $studentid);
        $comment = $this->getHomeWorkComment($homeworkid , $studentid);

        echo "<div class='marks-wrapper'>";
        echo "<h2 class='title'> Note : " . $mark['mark'] . "/10</h2>";
        echo "<p class='mark'>Remarque : " . $comment['comments'] . "</p>";
        echo "</div>";
        
    }

    

}
