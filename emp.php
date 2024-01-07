<!DOCTYPE html>
<html lang="en">

<?php
include 'classes/emp/empview.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi du Temps de l'Élève</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="container emp">
            <h2>Votre Emploi du Temps</h2>

            <?php
            $emp = new EmpView();
            $emp->displayWeeklySchedule('3', 'P1');             
            ?>
        </section>
    </main>

</body>
</html>
