<!DOCTYPE html>
<html lang="en">

<?php
    include 'classes/folders/folderview.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Documents</title>
</head>
<body>
    <!-- <div class="header">
        
        <h2>Mes Documents</h2>

        <div class="right">
            <div class="search-box">
                <button class="btn-search"><ion-icon name="search-outline"></ion-icon></button>
                <input type="text" class="input-search" placeholder="Type to Search...">
            </div>
    
            <div class="notif-box"><ion-icon name="notifications-outline"></ion-icon></div>
    
        </div>
    </div> -->

    <div class="container">

        <div class="doc-container">


        <?php
            $folder = new FolderView();
            $folder->setAllFoldersByYear('5');             
        ?>
        
        </div>
    </div>





    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>