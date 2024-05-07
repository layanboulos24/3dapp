<!DOCTYPE html>
<html lang="en">
  <!-- CHANGE URL PATH TO /~lb768/3dapp/assignment/3Dapp ..... -->

<head>
	<meta charset="UTF-8">
	<title>Coca Cola</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/3dapp/css/bootstrap.css">
    <link rel="stylesheet" href="/3dapp/css/custom.css">
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola" style="background-color: white;">
      <div class="container-fluid">
        <div class="logo text-danger">
          <a class="navbar-brand text-danger link-dark" href="#">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p class="unstyled">Refreshing the world, one story at a time</p>
          </a>
          </div>
          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item m-1">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item m-1">
              <a class="nav-link text-danger link-dark" href="#">About</a>
            </li>
            <li class="nav-item m-1 dropdown">
              <a class="nav-link dropdown-toggle text-danger link-dark" href="#" role="button" data-bs-toggle="dropdown">Drinks</a>
              <ul class="dropdown-menu dropdown-menu-start">
                <li><a class="dropdown-item" href="/3dapp/application/view/coke.php">Coca Cola</a></li>
                <li><a class="dropdown-item" href="#">Fanta</a></li>
                <li><a class="dropdown-item" href="#">Costa Coffee</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    
    <div class="card rounded img-thumbnail mx-auto mt-5 shadow-sm" id="slideshow" style="max-width: 95%;">
      <img src="/3dapp/assets/images/coke_brands_0.jpg" alt="Coke can">
      <img src="/3dapp/assets/images/coke_brands_1.jpg" alt="Coke can">
      <img src="/3dapp/assets/images/coke_brands_2.jpg" alt="Coke can">
      <img src="/3dapp/assets/images/coke_brands_3.jpg" alt="Coke can">
      <img src="/3dapp/assets/images/coke_brands_4.jpg" alt="Coke can">
      <img src="/3dapp/assets/images/coke_brands_5.jpg" alt="Coke can">
      <img src="/3dapp/assets/images/coke_brands_6.jpg" alt="Coke can">
      <img src="/3dapp/assets/images/coke_brands_7.jpg" alt="Coke can">
      <img src="/3dapp/assets/images/coke_brands.jpeg" alt="Coke can">  
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // Get all the images within the slideshow
        var images = document.querySelectorAll('#slideshow img');
        
        // Set initial index and show the first image
        var currentIndex = 0;

        // Function to show next image
        function showNextImage() {
          // Hide current image
          images[currentIndex].style.display = 'none';
          // Move to the next image
          currentIndex = (currentIndex + 1) % images.length;
          // Show next image
          images[currentIndex].style.display = 'block';

          // Check if we've reached the last image
          if (currentIndex === images.length - 1) {
            // Clear the interval to stop the slideshow
            clearInterval(slideshowInterval);
          }
        }

        // Set interval to show next image every 3 seconds
        var slideshowInterval = setInterval(showNextImage, 400);

        // Show the first image immediately
        images[currentIndex].style.display = 'block';
      });
    </script>

    <div class="container" style="max-width: 95%;">
      <div class="row">
        <div class="col card">
          <p class="h1">Hello</p>
        </div>
        <div class="col card">
          <p class="h1">Hello</p>
        </div>
      </div>
      
      
    </div>
    
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootsrap Js -->
    <script src="/~lb768/3dapp/assignment//3dapp/js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
</body>
</html>