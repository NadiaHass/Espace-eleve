<?php
include 'classes/activity/activity.php';

class ActivityView extends activity{

 public function printActivities(){
    $activities = $this->getAllActivities();

    foreach ($activities as $activity) {
        echo '<div class="gallery-item ' . $activity['category'] . '">';
        echo '<div class="gallery-item-inner">';
         echo '<a href="activity_page.php?id=' . $activity['id'] . '">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($activity['image']) . '" alt="' . $activity['category'] . '">';
        echo '<h3>' . $activity['title'] . '</h3>';
        echo '</a>';
        echo '</div></div>';
    }
}

    public function printActivityDetails($id){
        $activity = $this->getActivityById($id);

        echo '<div class="activity-details">';
        echo '<h2>' . $activity['title'] . '</h2>';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($activity['image']) . '" alt="' . $activity['category'] . '">';
        echo '<p>' . $activity['description'] . '</p>';
        echo '</div>';

    } 
    
}
