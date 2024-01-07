<?php
    include 'classes/user/UsersView.php';
    include 'classes/homework/HomeWorkView.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="container home-work-container">
            <p>
                Welcome back 
                <?php
                $userObj = new UsersView();
                $userObj->showUserById(1); 
            ?>
            !
        </p>

        <h2>Liste des Devoirs</h2>

        <?php
            $homeworks = new HomeWorkView();
            $homeworks->printHomeWorksByClassYear('P1', '1');
        ?>
        </section>
        
    </main>

</body>
</html>