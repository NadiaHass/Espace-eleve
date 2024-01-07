<?php
include 'classes/folders/folder.php';

class FolderView extends Folder{

    public function setAllFoldersByYear($year)
    {
        $folders = $this->getAllFoldersByYear($year);
    
        foreach ($folders as $folder) {
            $red = mt_rand(0, 255);
            $green = mt_rand(0, 255);
            $blue = mt_rand(0, 255);
    
            echo '<div class="doc" style="color: rgba(' . $red . ',' . $green . ',' . $blue . ', 1); background-color: rgba(' . $red . ',' . $green . ',' . $blue . ', 0.427);">';
            echo '<div class="icon"><ion-icon name="folder-open"></ion-icon></div>';
            echo '<a href="files.html">';
            echo '<div class="texts">';
            echo '<p class="title">' . $folder['title'] . '</p>';
            echo '<p class="description">' . $folder['description'] . '</p>';
            echo '</div></a></div>';
        }
    }    
    

}