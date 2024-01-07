<!DOCTYPE html>
<html lang="en">

<?php
    include 'classes/homework/homeworkview.php';
    include 'classes/homework/homeworkcontroller.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homeworkstyle.css">
    <title>Document</title>
</head>
<body>

<?php
    $homeworkController = new HomeWorkController();
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_homework"])) {
        $homeworkController->insertSubmission(1,5);

        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();

    }
    ?>

    <?php
        $homeworkview = new homeworkview();
        // 5  4
        $homeworkview->printSubmitPage(5 , 1);


    ?>


</body>
</html>


