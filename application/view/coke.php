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
    <link rel="stylesheet" type="text/css" href="/3dapp/css/jquery.fancybox.min.css">
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola" style="background-color: white;">
      <div class="container-fluid">
        <div class="logo text-danger">
          <a class="navbar-brand text-danger link-dark" href="#=">
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
                <li><a class="dropdown-item" href="#">Coca Cola</a></li>
                <li><a class="dropdown-item" href="#">Fanta</a></li>
                <li><a class="dropdown-item" href="#">Costa Coffee</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="text-center container d-flex justify-content-center" style="height: 150px;">
        <div class="text-danger text-centre coke container-fluid" id="coke" style="display: block; text-align: center; vertical-align: middle; line-height: 150px;">
            <h1>1</h1> 
            <h1>oca</h1>
            <h2>Cola</h2>
            </a>
            
        </div>
        <div class="container-fluid" id="fanta"  style="display: none;">
          <img src="/3dapp/assets/images/fantaLogo.png" width="200" height="150"/>
        </div>
        <div class="container-fluid" id="costa"  style="display: none;">
          <img src="/3dapp/assets/images/costa_logo.png" width="200" height="150"/>
        </div>
    </div>
    <div class="container  justify-content-center ">
      <div class="row">
        <div class="col-6 card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="cokeTab" onmouseup="cokeScene()">Coke</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="fantaTab" onmouseup="fantaScene();">Fanta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="costaTab" onmouseup="costaScene();">Costa</a>
            </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-title">
              <Switch whichChoice="0" id='modelTitleSwitch'>
                  <?php echo "<h4 style=' display:block;' id='modelTitle_0'>" . $data[0]['x3dModelTitle'] . "</h4>"?>
                  <?php echo "<h4 style='display:none;' id='modelTitle_1'>" . $data[1]['x3dModelTitle'] . "</h4>"?>
                  <?php echo "<h4 style='display:none;' id='modelTitle_2'>" . $data[2]['x3dModelTitle'] . "</h4>"?>
                </Switch>
            </div>
            <div id="container" class="model3D">
              <x3d id="cokeX3D" width="500px" height= "500px" > 
                <scene>
                    <transform>
                      <inline nameSpaceName="cokeX3D" mapDEFToID="true" url="/3dapp/assets/3dModels/coke.x3d" onclick="spin()"></inline>
                    </transform>
                </scene> 
              </x3d>
              <x3d id="fantaX3D" width="500px" height= "500px" class="hidden"> 
                <scene>
                    <transform>
                      <inline nameSpaceName="fantaX3D" mapDEFToID="true" url="/3dapp/assets/3dModels/fanta.x3d" onclick="spin()"></inline>
                    </transform>
                </scene> 
              </x3d>
              <x3d id="costaX3D" width="500px" height= "500px" class="hidden"> 
                <scene>
                    <transform>
                      <inline nameSpaceName="costaX3D" mapDEFToID="true" url="/3dapp/assets/3dModels/costa.x3d" onclick="spin()"></inline>
                    </transform>
                </scene> 
              </x3d>
            </div>
            <div id="x3dCreationMethod_coke">
              <Switch whichChoice="0" id='methodSwitch'>
                <?php echo "<p style=' display:block;' id='method_0'>" . $data[0]['x3dCreationMethod'] . "</p>"?>
                <?php echo "<p style=' display:none;' id='method_1'>" . $data[1]['x3dCreationMethod'] . "</p>"?>
                <?php echo "<p style=' display:none;' id='method_2'>" . $data[2]['x3dCreationMethod'] . "</p>"?>
              </Switch>
            </div>
           
          </div>
        </div>
        <div class="col-1">
        </div>
        <div class="col-4 ">
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <p>Camera Views</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn" onclick="cameraFront()">Default</a>
                  <a href="#" class="btn" onclick="cameraLeft()">Left</a>
                  <a href="#" class="btn" onclick="cameraRight()">Right</a>
                  <a href="#" class="btn" onclick="cameraTop()">Top</a>
                </div>
              </div>
          </div>
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <p>Render and Lighting</p>
                </div>  
                <div class="card-body">
                  <a href="#" class="btn" onclick="toggleWireFrame()">Wire</a>
                  <a href="#" class="btn" onclick="light1()">Light 1</a>
                  <a href="#" class="btn" onclick="light2()">Light 2</a>
                  <a href="#" class="btn" onclick="light3()">Light 3</a>
                  <a href="#" class="btn" onclick="light4()">Light 4</a>
                  <a href="#" class="btn" onclick="light5()">Light 5</a>
                  <a href="#" class="btn" onclick="turnOffAllLights()">Turn off all lights</a>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <p>Animation</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn" onclick="spin()">Animate</a>
                  <a href="#" class="btn" onclick="stopAnimation()">Stop</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class=" col-11 card">
          <div class="card-title">
            <Switch whichChoice="0" id='TitleSwitch'>
              <?php echo "<h4 style='display:block;' id='title_0' class='m-3'>" . $data[0]['modelTitle'] . "</h4>"?>
              <?php echo "<h4 style='display:none;' id='title_1' class='m-3'>" . $data[1]['modelTitle'] . "</h4>"?>
              <?php echo "<h4 style='display:none;' id='title_2' class='m-3'>" . $data[2]['modelTitle'] . "</h4>"?>
            </Switch>
              
          <div class="card-body">
            <Switch whichChoice="0" id='descriptionSwitch'>
              <?php echo "<p style='display:block;' id='description_0'>" . $data[0]['modelDescription'] . "</p>"?>
              <?php echo "<p style='display:none;' id='description_1'>" . $data[1]['modelDescription'] . "</p>"?>
              <?php echo "<p style='display:none;' id='description_2'>" . $data[2]['modelDescription'] . "</p>"?>
            </Switch>
          </div>
        </div>
      </div>
      <div class="row">
        <div class=" col-11 card">
          <div class="card-header">
            Gallery
          </div>
          <div class="card-body">
            <div class="gallery" id="gallery"></div>
          </div>
        </div>
      </div>
    <div>
    <script> 


      

    </script>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootsrap Js -->
    <script src="/3dapp/js/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
    <script src="/3dapp/js/modelInteractions.js"></script>
    <script src="/3dapp/js/swapContents.js"></script>
    <script src="/3dapp/js/jquery.fancybox.min.js"></script>
    <script src="/3dapp/js/gallery_generator.js"></script>
    <!-- <script src="/3dapp/js/getJsonData.js"></script> -->

</body>
</html>