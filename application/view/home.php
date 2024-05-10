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
    <script type='text/javascript' src='http://www.x3dom.org/download/x3dom.js'> </script> 
    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/download/x3dom.css'></link> 
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <script src="js/jquery.fancybox.min.js"></script>
</head>
<body>
    <div id="overlay" class="overlay" style="display: none;"></div>
     <!-- Navbar -->
     <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola" style="background-color: white;">
      <div class="container-fluid">
        <div class="logo text-danger">
          <a class="navbar-brand text-danger link-dark" href="/3dapp/">
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
              <a class="nav-link active" href="/3dapp/">Home</a>
            </li>
            <li class="nav-item m-1">
              <a class="nav-link text-danger link-dark" onclick="openAbout()">About</a>
            </li>
            <li class="nav-item m-1 dropdown">
              <a class="nav-link text-danger link-dark" href="/3dapp/index.php/apiModels" role="button" d>Models</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
      <div class="row">
        <div class="card rounded img-thumbnail mx-auto mt-5 shadow-sm col-12" id="slideshow" style="max-width: 95%;">
          <img src="/3dapp/assets/images/home/coke_brands/coke_brands_0.jpg" alt="Coke can">
          <img src="/3dapp/assets/images/home/coke_brands/coke_brands_1.jpg" alt="Coke can">
          <img src="/3dapp/assets/images/home/coke_brands/coke_brands_2.jpg" alt="Coke can">
          <img src="/3dapp/assets/images/home/coke_brands/coke_brands_3.jpg" alt="Coke can">
          <img src="/3dapp/assets/images/home/coke_brands/coke_brands_4.jpg" alt="Coke can">
          <img src="/3dapp/assets/images/home/coke_brands/coke_brands_5.jpg" alt="Coke can">
          <img src="/3dapp/assets/images/home/coke_brands/coke_brands_6.jpg" alt="Coke can">
          <img src="/3dapp/assets/images/home/coke_brands/coke_brands_7.jpg" alt="Coke can">
          <img src="/3dapp/assets/images/home/coke_brands/coke_brands.jpeg" alt="Coke can">  
        </div>
      </div>
    </div>
    <div class="container-fluid" style="max-width:63%">
    <div class="row">
       
        <div class="col-md-6 mb-3 mb-md-0">
            <div class="card rounded mx-auto shadow-sm"  style="background-color: white;">
              
                <img class="card-img-top" src="/3dapp/assets/images/home/extra/cocacolaCompany.png" alt="Coca-Cola Company">
                
                <div class="card-body">
                    <p class="card-text">The Coca-Cola Company, founded on January 29, 1892, in Atlanta, Georgia, United States, by Asa Griggs Candler, is renowned globally for its iconic soft drink, Coca-Cola. Originating as a patent medicine created by pharmacist John S. Pemberton in 1886, Coca-Cola rapidly grew into one of the world's largest beverage companies. Alongside Coca-Cola, the company produces and markets a diverse range of non-alcoholic beverages, distributed in over 200 countries and territories worldwide. With a strong commitment to sustainability, community engagement, and cultural impact, Coca-Cola remains a symbol of innovation, quality, and responsible business practices, shaping the beverage industry and leaving an indelible mark on global culture.</p>
                    <a href="https://www.coca-cola.com/gb/en" class="btn rounded border mb-2 mt-2">Find out more</a>
                </div>
            </div>
        </div>
        
 
        <div class="col-md-6">
            <div class="row">
                
                <div class="col-12 mb-3">
                    <div class="card rounded mx-auto shadow-sm"  style="background-color: white;">
                        <img class="card-img-top" src="/3dapp/assets/images/home/extra/CokeHome.jpeg" alt="Coca-Cola Home">
                    </div>
                </div>
              
                <div class="col-12">
                    <div class="card rounded mx-auto shadow-sm"  style="background-color: white;">
                        <img class="card-img-top" src="/3dapp/assets/images/home/extra/FantaHome.png" alt="Fanta Home">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

    

      <!-- Footer -->
    <nav class="navbar navbar-expand-sm w-100 mt-3" style="width: 100%; background-color: white;">
    <div class="container-fluid">
      <div class="navbar-text float-left copyright p-3">
        <p><span class="align-baseline">& copy 2024 Mobile Web 3D Applications</span></p>
        <p>Layan Boulos </p>
      </div>
      <div class="navbar-text float-right social">
        <a href="https://github.com/layanboulos24/3dapp"><i class="fab fa-github-square fa-2x"
            style="font-size: 40px; color:red"></i></a>
      </div>
    </div>
  </nav>


      <!-- About pop up -->
    <div id="aboutPopUp" class="w-100 aboutPopUp" style="background-color: white; display: none;">
      <div class="popup-header">
        <span onclick="closeAbout()" class="close m-2">X</span>
      </div>
      <div class="popup-content">
        <h4 class="m-2">About</h4>
        <p class="m-2">This website was made for the (920G5) Mobile 3D Applications project. This website displays three x3d models based on the brand Coca Cola. Created by Layan Boulos</p>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        
        var images = document.querySelectorAll('#slideshow img');
        
     
        var currentIndex = 0;

       
        function showNextImage() {
       
          images[currentIndex].style.display = 'none';
       
          currentIndex = (currentIndex + 1) % images.length;
   
          images[currentIndex].style.display = 'block';

        
          if (currentIndex === images.length - 1) {
       
            clearInterval(slideshowInterval);
          }
        }


        var slideshowInterval = setInterval(showNextImage, 400);


        images[currentIndex].style.display = 'block';
      });
    </script>
    
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootsrap Js -->
    <script src="/~lb768/3dapp/assignment//3dapp/js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
    <script src="/3dapp/js/navBar.js"></script>

</body>
</html>