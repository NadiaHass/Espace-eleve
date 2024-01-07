<!DOCTYPE html>
<html lang="en">
  <?php
    include 'classes/activity/activityview.php';
  ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Slider -->
    <section class="slides-container">
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slide-1" src="https://images.unsplash.com/photo-1544776193-32d404ae608a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1929&q=80" alt="3D rendering of an imaginary orange planet in space" />
                <img id="slide-2" src="https://images.unsplash.com/photo-1565665643598-b888bfb550c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="3D rendering of an imaginary green planet in space" />
                <img id="slide-3" src="https://images.unsplash.com/photo-1610484826967-09c5720778c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="3D rendering of an imaginary blue planet in space" />
            </div>
            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a>
            </div>
        </div>
    </section>  
    
    
    <!-- Cards -->
    <section class="container">
        <h2>Pour vous !</h2>
        <div class="cards-wrapper">
            <div class="card">
              <a href="http://localhost/eleve/homeworks.php">
                <div class="icon-wrapper">
                  <ion-icon name="document-text-outline"></ion-icon>
              </div>
              <h4>Devoirs</h4>

              </a>
            </div>


            <div class="card">
              <a href="http://localhost/eleve/emp.php">
                <div class="icon-wrapper">
                  <ion-icon name="calendar-number-outline"></ion-icon>
              </div>
              <h4>Emploi du temps</h4>

              </a>
            </div>


            <!-- <div class="card">
              <a href="marks.html">
                <div class="icon-wrapper">
                  <ion-icon name="school-outline"></ion-icon>
              </div>
              <h4>Notes</h4>
              </a>
            </div> -->

        </div>
    </section>


    <!-- Filterable Activities -->
    <section class="gallery">
        <div class="container">
            <h2>Nos Activites</h2>
            <div class="row">
                <div class="gallery-filter">
                  <span class="filter-item active" data-filter="all">all</span>
                  <span class="filter-item" data-filter="Arts">Arts</span>
                  <span class="filter-item" data-filter="Religion">Religion</span>
                  <span class="filter-item" data-filter="Sports">Sports</span>
                  <span class="filter-item" data-filter="Sorties">Sorties</span>
                </div>
            </div>

            <div class="row">
              <?php
              $activityView = new ActivityView();
              $activityView->printActivities();
              ?>
            </div>

        </div>



    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
      const slider = document.querySelector('.slider');
    
      function scrollSlider() {
        const firstSlide = slider.firstElementChild;
        slider.appendChild(firstSlide);
      }
       setInterval(scrollSlider, 2000);


       const filterContainer = document.querySelector(".gallery-filter");
 const galleryItems = document.querySelectorAll(".gallery-item");


 filterContainer.addEventListener("click", (event) =>{
   if(event.target.classList.contains("filter-item")){

     // deactivate existing active 'filter-item'
    filterContainer.querySelector(".active").classList.remove("active");

     // activate new 'filter-item'
    event.target.classList.add("active");

    const filterValue = event.target.getAttribute("data-filter");

    galleryItems.forEach((item) =>{

       if(item.classList.contains(filterValue) || filterValue === 'all'){
        item.classList.remove("hide");
         item.classList.add("show");
       }

       else{
        item.classList.remove("show");
        item.classList.add("hide");
       }

     });
   }
 });
    </script>
    </body>
</html>