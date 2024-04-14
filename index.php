<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="style.css" rel="stylesheet" />

    <title>Cheesy Cheese Bakery</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <!-- Bagian Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Cheesy Cheese Bakery <i class="bi bi-chat-left-heart-fill"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Bagian Halaman Menu Utama (pakai carousel)-->
    <div id="carouselExampleCaptions" class="carousel  slider-home">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="background-image" style="background-image: url(image/bakery1.jpg)">
            <!-- <img src="image/bakery1.jpg" class="d-block w-100" alt="Croissant"> -->
          </div>
          <div class="carousel-caption">
            <div class="caption-content">
              <h5><strong>Croissant</strong></h5>
              <p>Try some delightful croissant in Cheesy Cheese Bakery.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="background-image" style="background-image: url(image/bakery2.jpg)">
            <!-- <img src="image/bakery2.jpg" class="d-block w-100" alt="Doughnut"> -->
          </div>
          <div class="carousel-caption">
            <div class="caption-content">
              <h5><strong>Doughnut</strong></h5>
              <p>Find the best taste of doughnut more in Cheesy Cheese Bakery.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="background-image" style="background-image: url(image/bakery3.jpg);"> 
            <!-- <img src="image/bakery3.jpg" class="d-block w-100" alt="Cinnamon Rolls"> -->
          </div>
          <div class="carousel-caption">
            <div class="caption-content">
              <h5><strong>Cinnamon Rolls</strong></h5>
              <p>Find some sweet and delicious cinnamon rolls in Cheesy Cheese Bakery</p>
            </div>
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

    <!--Bagian About Us-->
    <div class="container">
      <div data-aos="fade-up" data-aos-duration="1000" id="aboutus">
        <h2 class="about-us"><strong>About Us</strong></h2>
        <div class="row">
        <div class="col-md-8">
            <div class="title-about-us">
              <h3>Homemade bread and patisserie</h2>
            </div>
            <div class="caption-about-us">
              <p style="color: #666;">At Cheesy Cheese Bakery, baking isn't just our profession; it's our passion. With a heritage steeped in tradition and a commitment to quality, we craft each of our delectable treats with love and precision. From our signature artisan bread to our decadent pastries, every creation that emerges from our ovens is a testament to our dedication to excellence. Using only the finest ingredients and time-honored techniques, we strive to delight the senses and create moments of pure indulgence for our customers. Whether you're stopping by for your morning croissant or planning a special celebration, we invite you to experience the magic of Cheesy Cheese Bakery and taste the difference that passion makes</p>
            </div>
          </div>
          <div class="col-lg-4">
            <center><img src="image/baking.jpg" class="d-block w-100 rounded-pill baking-index-image" alt="Baking"></center>
          </div>
        </div>
      </div>
    </div>

    <!--Bagian Best Seller-->
    <div class="section-service">
      <div class="container-best-seller">
        <div class="container">
          <h2 data-aos="zoom-in" data-aos-duration="500" class="best-seller"><strong>Best Seller</strong></h2>
          <div class="row">
          <div data-aos="fade-down" data-aos-duration="1000" class="col-lg-4 best-seller-box">
              <div class="service-box">
                <i class="bi bi-hearts icon-service"></i>
                <div class="service-image">
                  <img src="image/cheesecake.jpg" class="cheesecake" alt="Cheesecake" />
                </div>
                <h1>Cheese Cake</h1>
                <p>Cheese cake is a rich and creamy dessert made primarily with cream cheese, sugar, eggs, and often a crust made from crushed cookies, graham crackers, or pastry. It can be baked or unbaked, depending on the recipe and desired texture. The flavor of cheesecake can vary widely, with additions such as vanilla, lemon zest, or chocolate commonly used to enhance its taste. </p>              </div>
          </div>
          <div data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000" class="col-lg-4 best-seller-box">
            <div class="service-box">
              <i class="bi bi-hearts icon-service"></i>
              <div class="service-image">
                <img src="image/bruschetta.jpg" class="bruschetta" alt="Bruschetta" />
              </div>
              <h1>Bruschetta</h1>
              <p>Bruschetta is an Italian appetizer that typically consists of grilled or toasted bread slices topped with a savory mixture of chopped tomatoes, garlic, basil, olive oil, and sometimes balsamic vinegar. The bread is usually rubbed with garlic and drizzled with olive oil before being topped with the tomato mixture. Variations of bruschetta may include additional ingredients such as mozzarella cheese, roasted peppers, or prosciutto. </p>            </div>
          </div>
          <div data-aos="fade-down" data-aos-delay="400" data-aos-duration="1000" class="col-lg-4 best-seller-box">
            <div class="service-box">
              <i class="bi bi-hearts icon-service"></i>
              <div class="service-image">
                <img src="image/cupcakes.jpg" class="cupcakes" alt="Cupcakes" />
              </div>
              <h1>Cupcakes</h1>
              <p>Once baked, cupcakes are often topped with frosting, which can be made from buttercream, cream cheese, ganache, or other sweet toppings. Decorations such as sprinkles, edible pearls, or fondant shapes are frequently used to embellish cupcakes, adding visual appeal and additional flavor. </p>
            </div>
          </div>
        </div>
       </div>
      </div>
    </div>

    <!--Whatsapp-->
    <div class="whatsapp-button">
      <a target="_blank" href="https://api.whatsapp.com/send?phone=081294903772&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."><i class="bi bi-whatsapp"></i></a>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>