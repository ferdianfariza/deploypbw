<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <title>Ferdian's Playlist</title>
    <link rel="icon" href="img/fe.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <style>

        .card-img {
        object-fit: cover;
        height: 100%;
        width: 100%;
      }
      .carousel-item img,
      .carousel-item iframe {
        height: 75vh;
        object-fit: cover;
        width: 100%;
        border-radius: 8px;
      }

      .row {
        margin-top: 30px;
      }

      .btn a {
        text-decoration: none;
        color: inherit;
      }

      .shared-padding {
        padding: 40px 20px;
      }
      .nav-padding {
        padding: 15px 20px;
      }
      #hero {
        justify-content: center;
      }
      .gallery-images {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: space-evenly;
      }
      .gallery-images img {
        width: 11.2rem;
        border-radius: 5px;
      }
      .card-equal {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
    </script>

<script type="text/javascript">
  window.setTimeout("tampilwaktu()", 1000);

  function tampilwaktu() {
    var waktu= new Date();
    var bulan= waktu.getMonth() + 1;
  
    document.getElementById("tanggal").innerHTML =
    waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear() + "-";
   
    document.getElementById("jam").innerHTML =
      waktu.getHours() + ":" +
      waktu.getMinutes();

      setTimeout  ("tampilwaktu()", 1000);

  }
  window.onload = tampilWaktu;
  </script>

  <!-- navigasi bar -->
   <nav nav class="navbar sticky-top navbar-expand-lg nav-padding bg-body">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Ferdian Nur Fariza</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <p>
            <div id="tanggal"></div>
            <div id="jam"></div>
          </p>  
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#playlist">Playlist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeri">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
          <form class="d-flex " role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
          
        <!-- mode switch -->
        <div class="dropdown ms-4" id="themeDropdown">
          <button class="btn nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi-sun-fill theme-icon-active" 
                data-theme-icon-active="bi-sun-fill"></i>

          </button>
      
          <ul class="dropdown-menu dropdown-menu-end my-2" aria-labelledby="dropdownMenuButton" data-bs-popper="static">
              <li>
                <button class="dropdown-item d-flex align-item-center" type="button" data-bs-theme-value="light">
                  <i class="bi bi-sun-fill me-2 opacity-50" data-theme-icon="bi-sun-fill"></i>
                  Light
                </button>
              </li>
              <li>
                <button class="dropdown-item d-flex align-item-center" type="button" data-bs-theme-value="dark">
                  <i class="bi bi-moon-stars-fill me-2 opacity-50" data-theme-icon="bi-moon-stars-fill"></i>
                  Dark
                </button>
              </li>
             
          </ul>
      </div>
        <!-- end -->
        </div>
      </div>
    </nav>

  <!-- jam -->
   <h6>
    <span id="tanggal"></span>
    <span id="jam"></span>
   </h6>
  
  <!-- hero -->
    <section id="hero" class="container-fluid shared-padding">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
            aria-label="Slide 4"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="4"
            aria-label="Slide 5"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="5"
            aria-label="Slide 6"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="6"
            aria-label="Slide 7"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/thumb/jcole.jpg" class="d-block w-100" alt="lazer" />
          </div>
          <div class="carousel-item">
            <img src="/thumb/carrr.webp" class="d-block w-100" alt="cincin" />
          </div>
          <div class="carousel-item">
            <img src="/thumb/playboi.avif" class="d-block w-100" alt="drake" />
          </div>
          <div class="carousel-item">
            <img src="/thumb/dddd.webp" class="d-block w-100" alt="jcole" />
          </div>
          <div class="carousel-item">
            <img src="/thumb/kata.jpg" class="d-block w-100" alt="bernadya" />
          </div>
          <div class="carousel-item">
            <img
              src="/thumb/play.jpg"
              class="d-block w-100"
              alt="playboi carti" />
          </div>
          <div class="carousel-item">
            <img
              src="/thumb/kanye.jpg"
              class="d-block w-100"
              alt="playboi carti" />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- hero-footer -->
      <div class="row mb-2">
        <div class="col-md-6">
          <div
            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary-emphasis"
                >Tupac Shakur</strong
              >
              <h3 class="mb-3">Single Drop</h3>
              <p class="card-text mb-auto">
                This is a wider card with supporting text below as a natural
                lead-in to additional content.
              </p>
              <p class="bg-teal">
                This is a wider card with supporting text below as a natural
                lead-in to additional content.
              </p>
              
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="/img/tupac.webp" 
              class="bd-placeholder-img"
              width="200"
              height="250">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div
            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success-emphasis"
                >Kendrick Lamar</strong
              >
              <h3 class="mb-3">Album Drop</h3>
              <p class="mb-auto">
                This is a wider card with supporting text below as a natural
                lead-in to additional content.
              </p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <div class="col-auto d-none d-lg-block">
                <img src="/img/kendricklamar.webp" 
                class="bd-placeholder-img"
                width="200"
                height="250">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- playlist -->
    <section id="playlist" class="container-fluid shared-padding">
<!-- playlist -->
<br id="playlist">
<br>
<h2 class="pb-2 border-bottom">Playlist</h2>
<div class="row row-cols-1 row-cols-md-5 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="/img/menari.jpg" class="card-img-top" alt="hindia" />
      <div class="card-body">
        <h5 class="card-title">Evakuasi</h5>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"
          >Hindia</small
        >
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/eva.jpg" class="card-img-top" alt="hindia" />
      <div class="card-body">
        <h5 class="card-title">Wejangan Mama</h5>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"
          >Hindia</small
        >
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/lagi.jpg" class="card-img-top" alt="bernadya" />
      <div class="card-body">
        <h5 class="card-title">Cincin</h5>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"
          >Hindia</small
        >
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/sial.jpeg" class="card-img-top" alt="bernadya" />
      <div class="card-body">
        <h5 class="card-title">Kini Mereka Tahu</h5>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"
          >Bernadya</small
        >
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/play.jpg" class="card-img-top" alt="playboi carti" />
      <div class="card-body">
        <h5 class="card-title">Timeless</h5>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"
          >Playboi Carti</small
        >
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/blond.jfif" class="card-img-top" alt="frank ocean" />
      <div class="card-body">
        <h5 class="card-title">Pink + White</h5>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"
          >Frank Ocean</small
        >
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/damn.jfif" class="card-img-top" alt="Kendrick Lamar" />
      <div class="card-body">
        <h5 class="card-title">HUMBLE</h5>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"
          >Kendrick Lamar</small
        >
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/KendrickGKMC.jpg" class="card-img-top" alt="Kendrick Lamar" />
      <div class="card-body">
        <h5 class="card-title">Money Trees</h5>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"
          >Kendrick Lamar</small
        >
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/soyy.jfif" class="card-img-top" alt="Boy Pablo" />
      <div class="card-body">
        <h5 class="card-title">Losing You</h5>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"
          >Boy Pablo</small
        >
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/img/trav.jpg" class="card-img-top" alt="Travis Scott" />
      <div class="card-body">
        <h5 class="card-title">FE!N</h5>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"
          >Travis Scott</small
        >
      </div>
    </div>
  </div>
</div>
</div>
    </section>
  <!-- galeri -->
    <section id="galeri" class="container-fluid shared-padding">
    <!-- galeri -->
    <br id="galeri">
    <br>
    <h2 class="pb-2 border-bottom">Gallery</h2>
    <br>


    <div class="container" id="custom-cards">  
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-0">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4" style="background-image: url('/img/asap.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">A$AP ROCKY</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="/img/play.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                  <small>Live at Sao Paulo</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                  <small>2023</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4" style="background-image: url('/img/iverson.jfif');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Jordan Carter - Drop the Album</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="/thumb/carrr.webp" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                  <small>Atlanta</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                  <small>2024</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4" style="background-image: url('/img/kanyyy.jpeg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Father Time to Bounds Part II</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="/thumb/kanye.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                  <small>Washington DC</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                  <small>2021</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

  <!-- about -->
    <section id="about" class="shared-padding">

      <br>
      <br>
      <h2 class="pb-2 border-bottom">About</h2>
      <br>


      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">Ferdian Nur Fariza</h2>
        <p class="blog-post-meta">27 Oktober 2024</p>

        <p>Saya mahasiswa teknik infomatika semester III dengan nim <strong>A11.2023.15074</strong>. Website ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Berbasis Web dengan Pak Ramadhan Rakhmat Sani M.Kom sebagai dosen. Wesbite ini memiliki 4 section sebagai berikut: </p>
        <ul>
          <li>Hero</li>
          <li>Playlist</li>
          <li>Galeri</li>
          <li>About</li>
        </ul>
        <p>Terima kasih banyak.</p>
      </article>
    </section>
  </body>

  
  <!-- footer -->
    <footer class="py-3 my-4 shared-padding">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-body-secondary">Home</a>
      </li>
      <li class="nav-item">
        <a href="#playlist" class="nav-link px-2 text-body-secondary"
          >Playlist</a
        >
      </li>
      <li class="nav-item">
        <a href="#galeri" class="nav-link px-2 text-body-secondary"
          >Gallery</a
        >
      </li>
      <li class="nav-item">
        <a href="#about" class="nav-link px-2 text-body-secondary">About</a>
      </li>
    </ul>
    <p class="text-center text-body-secondary">© 2024 Ferdian Nur Fariza</p>

    <script>
      

 (() => {
  'use strict';

  const setTheme = (theme) => {
    document.documentElement.setAttribute('data-bs-theme', theme); 
    localStorage.setItem('theme', theme);
  };

  const getStoredTheme = () => localStorage.getItem('theme') || 'light'; 

  const updateActiveThemeIcon = (theme) => {
    const themeIconActive = document.querySelector('.theme-icon-active');
    const activeButton = document.querySelector(`[data-bs-theme-value="${theme}"]`);
    const newIconClass = activeButton.querySelector('i').dataset.themeIcon;

    themeIconActive.classList.remove(themeIconActive.dataset.themeIconActive);
    themeIconActive.classList.add(newIconClass);
    themeIconActive.dataset.themeIconActive = newIconClass;
  };

  const showActiveTheme = (theme) => {
    document.querySelectorAll('[data-bs-theme-value]').forEach((btn) => {
      btn.classList.remove('active');
      btn.setAttribute('aria-pressed', 'false');
    });

    const activeButton = document.querySelector(`[data-bs-theme-value="${theme}"]`);
    if (activeButton) {
      activeButton.classList.add('active');
      activeButton.setAttribute('aria-pressed', 'true');
    }

    updateActiveThemeIcon(theme);
  };

  const initialTheme = getStoredTheme();
  setTheme(initialTheme);
  showActiveTheme(initialTheme);

  document.querySelectorAll('[data-bs-theme-value]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const selectedTheme = btn.getAttribute('data-bs-theme-value');
      setTheme(selectedTheme);
      showActiveTheme(selectedTheme);
    });
  });
})();


    </script>
    </footer>
    
</html>