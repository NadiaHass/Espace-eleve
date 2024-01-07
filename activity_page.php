<!DOCTYPE html>
<html lang="en">
    
<?php
    include 'classes/activity/activityview.php';
  ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/activitystyle.css">
    <title>Document</title>
</head>
<body>
    <?php

        $activityView = new ActivityView();
        $activityId = isset($_GET['id']) ? $_GET['id'] : null;
        $activityView->printActivityDetails($activityId);

    ?>
</body>
</html>