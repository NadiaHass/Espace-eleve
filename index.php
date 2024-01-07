<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/Gilroy-Light" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <title>Eleve Dashboard</title>

    <style>
        body {
          overflow: hidden; 
        }
      </style>    
</head>
<body>
        <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                    <span class="title">Eleve Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#"  onclick="loadPage('//localhost/eleve/home.php')">
                    <span class="icon">
                        <lord-icon
                            src="https://cdn.lordicon.com/cnpvyndp.json"
                            trigger="hover"
                            style="width:30px;height:30px">
                        </lord-icon>
                    </span>
                    <span class="title">Acceuil</span>
                </a>
            </li>
            <li>
                <a href="#"   onclick="loadPage('//localhost/eleve/chat.html')">
                    <span class="icon">
                        <span class="icon">
                            <lord-icon
                                src="https://cdn.lordicon.com/fdxqrdfe.json"
                                trigger="hover"
                                style="width:30px;height:30px">
                            </lord-icon>
                        </span>
    
                    </span>
                    <span class="title">Chat</span>
                </a>
            </li>
            <li>
                <a href="#"  onclick="loadPage('//localhost/eleve/document.php')">
                    <span class="icon">
                        <lord-icon
                        src="https://cdn.lordicon.com/jkzgajyr.json"
                        trigger="hover"
                        style="width:30px;height:30px">
                    </lord-icon>

                    </span>
                    <span class="title">Document</span>
                </a>
            </li>
            <li>
                <a href="#"  onclick="loadPage('//localhost/eleve/quiz.html')">
                    <span class="icon">
                        <lord-icon
                        src="https://cdn.lordicon.com/lobpqdog.json"
                        trigger="hover"
                        style="width:30px;height:30px">
                    </lord-icon>

                </span>
                    <span class="title">Quiz</span>
                </a>
            </li>

            
            <!-- Log Out-->
            <li>
                <a href="#" onclick="logOut()" class="logout">
                    <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="title">Déconnecter</span>
                </a>
            </li>

        </ul>
    </div>

    <!-- main -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
            </div>
            <!-- <div class="Welcome">
            <h1>Welcome , Kadi Habib<span><?php echo $_SESSION['user_name'] ?> </span></h1>
            </div> -->

            <!-- search -->
            <div class="search">
                <label>
                    <input type="text" placeholder="Search Here">
                    <a href="#">
                        <lord-icon
                            class="lord-icon"
                            src="https://cdn.lordicon.com/kkvxgpti.json"
                            trigger="hover"
                            style="width:25px;height:25px">
                        </lord-icon>
                    </a>
                </label>
            </div>

            <!-- UserIMG -->

            <div class="user">
                <img src="boy.png">
            </div>
        </div>

        <iframe id="iframe" src="home.html"></iframe>
   
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <script>

    //MenuToggle
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function(){
        navigation.classList.toggle('active')
        main.classList.toggle('active')
    }

    let list = document.querySelectorAll('.navigation li')
    function activeLink(){
        list.forEach((item) =>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
    
    list.forEach((item) =>
    item.addEventListener('mouseover',activeLink));

    function loadPage(pageURL) {
    const iframe = document.getElementById('iframe');
    iframe.src = pageURL;
  }
    </script>

</body>
</html>