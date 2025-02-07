<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="Logo"> 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
          <li class="nav-item me-5">
            <a class="nav-link active"  fs-2 aria-current="page"  href="#">Home</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link"  fs-2 href="">About</a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link"  id="scrollBtn" fs-2 href="#">Get Started</a> --}}
            <button class="btn btn-warning btn-lg rd-3" id="contact"> Contact </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/ind.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1><span>AROUND THE WORLD.</span></h1>
          <p>The world is a book, and those who do not travel read only one page</p>
          <button class="btn btn-warning btn-lg" id="scrollBtn">Explore</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/bgg.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1><span>AROUND THE WORLD.</span></h1>
          <p>The world is a book, and those who do not travel read only one page</p>
          <button class="btn btn-warning btn-lg" id="scrollBtn">Explore</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/lake-mountains.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1><span>AROUND THE WORLD.</span></h1>
          <p>The world is a book, and those who do not travel read only one page</p>
          <button class="btn btn-warning btn-lg" id="scrollBtn">Explore</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <br><br>

      <section  id="targetSection" class="about-section-padding" id="about">
        <div class="container hidden">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <div class="about-img">
              <img src="{{ asset('img/team.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
              <div class="about-text">
                <h2>About Us</h2>
                <p>We are a travel agent in Indonesia who has a certificate to become a travel agent. Our motto is safety number one.
                  we never doubt guests, even if their requests are strange.
                </p>
              </div>
            </div>
      </section>

      <script>
        document.getElementById("scrollBtn").addEventListener("click", function() {
            document.getElementById("targetSection").scrollIntoView({ behavior: "smooth" });
        });
    </script>
      
      <section class="my-5">
        <div class="service ">
          <div class="container">
            <h2 class="text-center mb-4 text-white">Our Services</h2>
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4 bg-dark">
                  <div class="card-body text-white ">
                    <i class="bi bi-currency-dollar"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                      <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z"/>
                    </svg><br><br>
                    <h3 class="card-title"><strong>PRICELESS</strong></h3>
                    <p class="card-text">
                      We are one of the travel agents in Indonesia with the lowest costs.
                    </p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                  </div>
                </div>
              </div>
            
              <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4 bg-dark">
                  <div class="card-body text-white">
                    <i class="bi bi-safe"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-safe" viewBox="0 0 16 16">
                      <path d="M1 1.5A1.5 1.5 0 0 1 2.5 0h12A1.5 1.5 0 0 1 16 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 1 14.5V13H.5a.5.5 0 0 1 0-1H1V8.5H.5a.5.5 0 0 1 0-1H1V4H.5a.5.5 0 0 1 0-1H1zM2.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5z"/>
                      <path d="M13.5 6a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5M4.828 4.464a.5.5 0 0 1 .708 0l1.09 1.09a3 3 0 0 1 3.476 0l1.09-1.09a.5.5 0 1 1 .707.708l-1.09 1.09c.74 1.037.74 2.44 0 3.476l1.09 1.09a.5.5 0 1 1-.707.708l-1.09-1.09a3 3 0 0 1-3.476 0l-1.09 1.09a.5.5 0 1 1-.708-.708l1.09-1.09a3 3 0 0 1 0-3.476l-1.09-1.09a.5.5 0 0 1 0-.708M6.95 6.586a2 2 0 1 0 2.828 2.828A2 2 0 0 0 6.95 6.586"/>
                    </svg><br><br>
                    <h3 class="card-title"><strong>SAFETY</strong></h3>
                    <p class="card-text">
                      Safety is our main priority for our customers and we will provide the best service.
                    </p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4 bg-dark">
                  <div class="card-body text-white">
                    <i class="bi bi-boxes"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                      <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"/>
                    </svg><br><br>
                    <h3 class="card-title"><strong> PACKAGES</strong></h3>
                    <p class="card-text">
                      There is a complete package of hotels, tourist destinations and pick-up.
                    </p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="gallery">
        <div class="container my-5 hidden">
          <h2 class="text-center mb-4">Destination Image</h2>
          <div class="row gallery">
              <div class="col-md-4 mb-4">
                  <img src="{{ asset('img/bali.jpg') }}" class="img-fluid img-thumbnail rounded float-start" alt="Gambar 1" onclick="openModal(this)">
              </div>
              <div class="col-md-4 mb-4">
                  <img src="{{ asset('img/jogja.jpg') }}" class="img-fluid img-thumbnail rounded float-start" alt="Gambar 2" onclick="openModal(this)">
              </div>
              <div class="col-md-4 mb-4">
                  <img src="{{ asset('img/papua.jpg') }}" class="img-fluid img-thumbnail rounded float-start" alt="Gambar 3" onclick="openModal(this)">
              </div>
              <div class="col-md-6 mb-4">
                  <img src="{{ asset('img/bromo.jpg') }}" class="img-fluid img-thumbnail rounded float-start" alt="Gambar 4" onclick="openModal(this)">
              </div>
              <div class="col-md-6 mb-4">
                  <img src="{{ asset('img/gng.jpg') }}" class="img-fluid img-thumbnail rounded float-start" alt="Gambar 5" onclick="openModal(this)">
              </div>
          </div>
      </div>
      
      {{-- Modal --}}
      <div id="imageModal" class="modal fade" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-body text-center">
                      <img id="modalImage" src="" class="img-fluid">
                  </div>
              </div>
          </div>
      </div>
      
      <script>
          function openModal(imgElement) {
              document.getElementById("modalImage").src = imgElement.src;
              new bootstrap.Modal(document.getElementById("imageModal")).show();
          }
      </script>

      </section>
      <section id="articles">
        <div class="container mt-5 hidden">
          <hr>
          <h2 class="text-center mb-4">Article</h2>
          <div class="row">
              <div class="col-md-4">
                  <div class="card">
                      <img src="{{ asset('img/ind.jpg') }}" class="card-img-top" alt="Gambar 1">
                      <div class="card-body">
                          <h5 class="card-title">Wisata pantai kelingking</h5>
                          <p class="card-text">Banyak turis wisatawan asing pergi berlibur pada saat tahun baru 2024.</p>
                          <a href="#" class="btn btn-primary">Lihat Detail</a>
                      </div>
                  </div>
              </div>
             
              <div class="col-md-4">
                  <div class="card">
                      <img src="{{ asset('img/jogja.jpg') }}" class="card-img-top" alt="Gambar 2">
                      <div class="card-body">
                          <h5 class="card-title">Berlibur ke Jogja</h5>
                          <p class="card-text">Malioboro menjadi salah satu destinasi yang sering dikunjungi oleh wisatawan.</p>
                          <a href="#" class="btn btn-primary">Lihat Detail</a>
                      </div>
                  </div>
              </div>
           
              <div class="col-md-4">
                  <div class="card">
                      <img src="{{ asset('img/bg.jpg') }}" class="card-img-top" alt="Gambar 3">
                      <div class="card-body">
                          <h5 class="card-title">Mt. Merbabu</h5>
                          <p class="card-text">Nikmati perjalanan mendaki untuk mencapai lautan awan yang indah.</p>
                          <a href="#" class="btn btn-primary">Lihat Detail</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </section>

      {{-- Animation scrolls --}}
      <script>
        const hiddenElements = document.querySelectorAll('.hidden');
      
        function checkScroll() {
            hiddenElements.forEach((el) => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    el.classList.add('show');
                }
            });
        }
      
        window.addEventListener('scroll', checkScroll);
        checkScroll(); // Cek saat pertama kali dimuat
      </script>

      <br><br>
      <section>
        <footer class="bg-dark text-light py-4">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <h5>Tentang Kami</h5>
                      <p>Kami adalah agen travel terpercaya yang menyediakan berbagai paket wisata dengan harga terbaik.</p>
                  </div>
                  
                  <div class="col-md-4">
                      <h5>Kontak</h5>
                      <p>Email: info@travel.com</p>
                      <p>Telepon: +62 812-3456-7890</p>
                      <p>Alamat: Jl. Wisata No. 12, Jakarta</p>
                  </div>
                  
                  <div class="col-md-4">
                      <h5>Ikuti Kami</h5>
                      <a href="#" class="text-light me-2"><i class="bi bi-facebook"></i> Facebook</a><br>
                      <a href="#" class="text-light me-2"><i class="bi bi-instagram"></i> Instagram</a><br>
                      <a href="#" class="text-light"><i class="bi bi-twitter"></i> Twitter</a>
                  </div>
              </div>
      
              <div class="text-center mt-3">
                  <p class="mb-0">&copy; 2024 Agen Travel. All Rights Reserved.</p>
              </div>
          </div>
      </footer>
      </section>

</body>
</html>