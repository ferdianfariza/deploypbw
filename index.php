<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <title>Ferdian</title>
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
        padding: 40px 70px;
      }
      .nav-padding {
        padding: 30px 55px;
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

      .navbar-acrylic {
        background-color: rgba(
          255,
          255,
          255,
          0.8
        );
        backdrop-filter: blur(10px); 

      }
    </style>
  </head>
  <body>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
    </script>

  <!-- navigasi bar -->
   <nav nav class="navbar sticky-top navbar-expand-lg nav-padding navbar-acrylic">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="/img/amaz.png" width="150px"></a>
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
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
  
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
            <img src="/thumb/playboi.avif" class="d-block w-100" alt="cincin" />
          </div>
          <div class="carousel-item">
            <img src="/thumb/Hero-3.jpg" class="d-block w-100" alt="drake" />
          </div>
          <div class="carousel-item">
            <img src="/thumb/hero-4.webp" class="d-block w-100" alt="jcole" />
          </div>
          <div class="carousel-item">
            <img src="/thumb/hero-5.webp" class="d-block w-100" alt="bernadya" />
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
        <p class="blog-post-meta">6 November 2024</p>

        <p>Saya mahasiswa teknik infomatika semester III dengan nim <strong>A11.2023.15074</strong>. Website yang menampilkan playlist musik terbaik dalam satu dekade terakhir dari musisi nasional sampai internasional.</p>
      </article>
    </section>
  </body>

  
  <!-- footer -->
    <footer class="py-3 my-4 shared-padding">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item">
        <a href="https://www.instagram.com/ferdianfariza/" class="nav-link px-2 text-body-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
        </svg></a>
      </li>
      <li class="nav-item">
        <a href="https://x.com/ferdianfarizaa" class="nav-link px-2 text-body-secondary"
          ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
          </svg></a
        >
      </li>
      <li class="nav-item">
        <a href="https://wa.me/qr/ERC5GURZ64X5H1" class="nav-link px-2 text-body-secondary"
          ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
          </svg></a
        >
      </li>
      <li class="nav-item">
        <a href="https://www.linkedin.com/in/ferdian-nur-fariza-651965273/" class="nav-link px-2 text-body-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
        </svg></a>
      </li>
    </ul>
    <p class="text-center text-body-secondary">© 2024 Ferdian Nur Fariza</p>
    </footer>
</html>
