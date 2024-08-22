<!doctype html>
<html lang="en">
    <head>
        <title>aboutUs</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Tangerine">
    </head>
    
    <body>
<header>
    <div class=" d-flex align-items-center justify-content-end  px-2 py-2" style="background:#556B2F;">
            <button class="btn btn-outline-light btn-sm me-2 text-white"><i class="fa-regular fa-user p-1 text-white"></i>Login/Register</button>
            <a href="#">
            <i class="fa-solid fa-cart-shopping me-2 text-white"></i>
            </a>
     </div>
     <nav class="navbar navbar-expand-lg navbar-light  p-3" style="background:#4B2E2A;">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
        <img style="width:50px;"  src="https://halecinnamon.com/images/logo.png" alt="logo">
        </a>
        
        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link me-5 active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  me-5 text-white" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  me-5 text-white" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  me-5 text-white" href="#">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Divider Line (hidden on mobile) -->
       
    </div>
</nav>

</header>
<main>
    <section class="bg-light text-center py-5 px-3">
        <div class="container">
            <h1 class="pb-5" style="font-family:Montserrat">ABOUT US</h1>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-just px-3" style="text-align:justify; font-family:sans-serif;">Welcome to Cinnamon Infucene, where our passion for quality and flavor comes alive in every cup. 
                        We specialize in crafting the finest cinnamon tea, carefully blending 
                        premium cinnamon to create a beverage that is both soothing and invigorating. 
                        Each of our tea bags is designed for convenience and ease, allowing you to enjoy the rich, 
                        aromatic flavors of cinnamon by simply dipping it into hot water.</p>
                    <p class="text-just px-3 "style="text-align:justify; font-family:sans-serif;">At Cinnamon Infucene, we believe in the power of natural ingredients. 
                        Our cinnamon is sourced from the best growers, ensuring that every sip is packed with natural goodness and a touch of warmth. 
                        We are dedicated to maintaining the highest standards of quality, from the selection of 
                        raw materials to the packaging of our tea bags. Our commitment to
                         excellence is reflected in the delightful taste and health benefits of our cinnamon tea.</p>
                         <p class="text-just px-3" style="text-align:justify; font-family:sans-serif;">Join us on a journey to discover the timeless allure of cinnamon.
                             Whether you are starting your day with a refreshing cup or winding down in the evening with a soothing brew, 
                             Cinnamon Infucene is here to provide a comforting and invigorating experience. 
                             Celebrate the perfect blend of tradition and innovation with us, 
                            one delightful sip at a time.</p>
                </div>    
                <div class="col-md-6 ">
                    <img class="w-75 ani-img" src="https://halecinnamon.com/images/background/CeyloneMap.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-warning-subtle py-5 px-3">
        <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex flex-column align-items-center">
            <img class=" ani-img " style="width:60%; " src="https://halecinnamon.com/images/misc/11l.jpg" alt="">
            </div>
    <div class="col-md-6">
        <h1 class="text-center pt-3 pb-3" style="font-family:Montserrat">FAQ</h1>
        <div class=" px-3 rounded-5 text-center bg-light ani-img" >
       
        <h1 class="py-3" style="font-family:Montserrat">Do you have questions?</h1>

        <div class="accordion" id="faqAccordion">
            <div class="border-bottom ">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        What is your return policy?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We offer a 15-day return window for a full refund or exchange on unused items. Returns must include original packaging and proof of purchase for processing.
                    </div>
                </div>
            </div>

            <div class="border-bottom">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Do you offer international shipping?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <!-- Add content here -->
                    </div>
                </div>
            </div>

            <div class="border-bottom">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-light "  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What if I receive a damaged or defective product?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <!-- Add content here -->
                    </div>
                </div>
            </div>

            <div class="border-bottom">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed bg-light"type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Are the product colors on the website accurate?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <!-- Add content here -->
                    </div>
                </div>
            </div>

            <div class="border-bottom">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed bg-light"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How do I contact customer support?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <!-- Add content here -->
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3">
            <a  class=" text-decoration-none " style="color:#F4A460;" href="">My question is not here.</a>
            <button class="btn text-white " style="background:#4B2E2A;">CONNECT US</button>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <section class=" py-5 px-3">
    <div class="container  ">
        <h1 class="text-center mb-4" style="font-family:Montserrat">Our Certification</h1>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                <div class="card bg-warning-subtle rounded-5 ani-img" style="width: 18rem;">
                    <img src="https://halecinnamon.com/images/certificate-1.jpg" class="card-img-top rounded-top-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Hale Cinnamon</h5>
                        <p class="card-text text-center">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                <div class="card ani-img bg-warning-subtle rounded-5" style="width: 18rem;">
                    <img src="https://halecinnamon.com/images/certificate-1.jpg" class="card-img-top rounded-top-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Hale Cinnamon</h5>
                        <p class="card-text text-center">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                <div class="card ani-img bg-warning-subtle rounded-5" style="width: 18rem;">
                    <img src="https://halecinnamon.com/images/certificate-1.jpg" class="card-img-top rounded-top-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Hale Cinnamon</h5>
                        <p class="card-text text-center">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                <div class="card ani-img bg-warning-subtle rounded-5" style="width: 18rem;">
                    <img src="https://halecinnamon.com/images/certificate-1.jpg" class="card-img-top rounded-top-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Hale Cinnamon</h5>
                        <p class="card-text text-center">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                <div class="card ani-img bg-warning-subtle rounded-5" style="width: 18rem;">
                    <img src="https://halecinnamon.com/images/certificate-1.jpg" class="card-img-top rounded-top-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Hale Cinnamon</h5>
                        <p class="card-text text-center">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4 mb-4 d-flex flex-column align-items-center">
                <div class="card ani-img bg-warning-subtle rounded-5" style="width: 18rem;">
                    <img src="https://halecinnamon.com/images/certificate-1.jpg" class="card-img-top rounded-top-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Hale Cinnamon</h5>
                        <p class="card-text text-center">Hale Nature provides eco-friendly, natural products for a sustainable lifestyle.</p>
                    </div>
                </div>
            </div>
        </div>
    
        
    </div>
    </section>
</main>
<footer>
<div  class=" pt-5 pb-3" style="background:#4B2E2A;">
<div class="container text-center">
    <div class="row align-items-start">
        <div class="col-md-3">
        <img  class="w-50"src="https://halecinnamon.com/images/logo.png" alt="logo">
        </div>
    </div>
    <div class="row align-items-start">
        <div class="col-md-3 text-white " >
            <div class="text-white " style="text-align:justify">Hale Cinnamon is a leading Sri Lankan cinnamon exporter. We are proud to provide high-quality Sri Lankan cinnamon, 
            produced using traditional methods for generations, to customers around the world.</div>
            <div class=" text-white text-center mb-3">
            <span class=" mx-3 fs-1"><i class="fa-brands fa-square-facebook"></i></span>
            <span  class=" mx-3 fs-1"> <i class="fa-brands fa-instagram" ></i></span>
            <span  class=" mx-3 fs-1"><i class="fa-brands fa-whatsapp"></i></span>
            </div>
           
        </div>
        <div class=" col-md-3 mb-4 mb-md-0">
            <h5 class="text-uppercase " style="color:#F4A460;">Quick Link</h5>

            <ul class="list-unstyled mb-0">
              <li >
              <a href="#!" class="text-white text-decoration-none " >Blog</a>
              </li>
              <li>
              <a href="#!" class="text-white text-decoration-none">About</a>
              </li>
              <li>
              <a href="#!" class="text-white text-decoration-none">Product</a>
              </li>
              <li>
              <a  class="text-white text-decoration-none">Contact</a>
              </li>
            </ul>
        </div>
        <div class=" col-md-3 mb-4 mb-md-0">
            <h5 class="text-uppercase" style="color:#F4A460;">Contact</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white text-decoration-none">+94777538775</a>
              </li>
              <li>
              <a href="mailto:info@halecinnamon.com" target="_blank" class="text-white text-decoration-none" title="Mail">info@halecinnamon.com</a>
              </li>
              <li>
              <a href="https://www.google.com/maps/place/Your+Address+Here" target="_blank" class="text-white text-decoration-none" title="Address"> No 032, main street, Colombo, Sri Lanka.</a>
              </li>
            </ul>
        </div>
        <div class="col-md-3">
          <h5 class="text-uppercase" style="color:#F4A460;">Know the latest news</h5>
          <div class="input-group mx-3">
            <form name="submit-to-google-sheet">
              <div class="d-flex">
              <input type="email" name="Email" class="form-control text-dark mt-2" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class=" mt-2 text-nowrap rounded-end text-white" style="background-color:#F4A460;"type="submit" id="button-addon2">More Update</button>
              </div>
            </form>
            <span id="msg" class="mx-5 d-block text-white"></span>
          </div>
        </div>
    </div>
    <hr class="m-0 text-white">

  <!-- Section: Copyright -->
  <section class="pb-3 pt-0">
    <div class="row d-flex align-items-center">
      <!-- Grid column -->
      <div class="col-md-3 col-lg-6 text-center">
        <!-- Copyright -->
        <div class="p-3 text-white">
        Copyright © 2024 All rights reserved by:
          <a class="text-decoration-none" style="color:#F4A460;" href="https://mdbootstrap.com/"
              >Hale Cinnamon</a
            >
        </div>
        <!-- Copyright -->
      </div>
      <!-- Grid column -->
      <div class="col-md-5 col-lg-6 text-center">
        <!-- Copyright -->
        <div class="p-3 text-white">
        Web Developed by 
          <a class="text-decoration-none" style="color:#F4A460;" href="https://mdbootstrap.com/"
              >Apexx pvt ltd</a
            >
        </div>
        <!-- Copyright -->
      </div>
    </div>
  </section>
  <!-- Section: Copyright -->
</div>
</div>
</footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
