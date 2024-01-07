<?php
include 'classes/emp/emp.php';

class EmpView extends Emp{
    
    public function getWeeklySchedule($year, $class)
    {
        $sql = "SELECT * FROM schedule WHERE annee = ? AND classe = ? ORDER BY FIELD(day_of_week, 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi'), time_slot_start";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$year, $class]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    public function displayWeeklySchedule($year, $class)
    {
        $schedule = $this->getWeeklySchedule($year, $class);
    
        // Create a two-dimensional array to store the schedule data
        $scheduleMatrix = [];
        foreach ($schedule as $entry) {
            $day = $entry['day_of_week'];
            $timeSlot = $entry['time_slot_start'] . ' - ' . $entry['time_slot_end'];
            $subject = $entry['subject'] . ' (' . $entry['room'] . ')';
            $scheduleMatrix[$timeSlot][$day] = $subject;
        }
    
        echo '<table>';
        echo '<tr><th>Temps</th><th>Dimanche</th><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th></tr>';
    
        $timeSlots = array(
            '08:00:00 - 09:00:00',
            '09:00:00 - 10:00:00',
            '10:00:00 - 11:00:00',
            '11:00:00 - 12:00:00',
            '12:00:00 - 13:00:00',
            '13:00:00 - 14:00:00',
            '14:00:00 - 15:00:00'
        );
    
        foreach ($timeSlots as $timeSlot) {
            echo '<tr>';
            echo '<td>' . $timeSlot . '</td>';
    
            foreach (['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi'] as $day) {
                echo '<td>';
                $subject = isset($scheduleMatrix[$timeSlot][$day]) ? $scheduleMatrix[$timeSlot][$day] : '/';
                echo $subject;
                echo '</td>';
            }
    
            echo '</tr>';
        }
    
        echo '</table>';
    }
    
}    