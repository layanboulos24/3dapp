<!DOCTYPE html>
<html lang="en">
<!-- CHANGE URL PATH TO /~lb768/3dapp/assignment/ ..... -->

<head>
  <meta charset="UTF-8">
  <title>Coca Cola</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/~lb768/3dapp/assignment/css/bootstrap.css">
  <link rel="stylesheet" href="/~lb768/3dapp/assignment/css/custom.css">
   
  <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'>
  </link>
  <link rel="stylesheet" type="text/css" href="/~lb768/3dapp/assignment/css/jquery.fancybox.min.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola" style="background-color: white;">
    <div class="container-fluid">
      <div class="logo text-danger">
        <a class="navbar-brand text-danger link-dark" href="/~lb768/3dapp/assignment/">
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
            <a class="nav-link text-danger" href="/~lb768/3dapp/assignment/">Home</a>
          </li>
          <li class="nav-item m-1">
            <a class="nav-link text-danger link-dark" onclick="openAbout()">About</a>
          </li>
          <li class="nav-item m-1 dropdown">
            <a class="nav-link text-danger link-dark" href="/~lb768/3dapp/assignment/index.php/apiModels" role="button" d>Models</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Body -->
  <div id="overlay" class="overlay" style="display: none;"></div>
  <div class="text-center container d-flex justify-content-center" style="height: 150px;">
    <div class="text-danger text-centre coke container-fluid" id="coke"
      style="display: block; text-align: center; vertical-align: middle; line-height: 150px;">
      <h1>1</h1>
      <h1>oca</h1>
      <h2>Cola</h2>
      </a>

    </div>
    <div class="container-fluid" id="fanta" style="display: none;">
      <img src="/~lb768/3dapp/assignment/assets/images/logos/fantaLogo.png" width="200" height="150" />
    </div>
    <div class="container-fluid" id="costa" style="display: none;">
      <img src="/~lb768/3dapp/assignment//assets/images/logos/costa_logo.png" width="200" height="150" />
    </div>
  </div>
  <div class="container  justify-content-center ">
    <div class="row">
      <div class="col-md-6">
        <div class="card shadow-sm" style="background-color: white;">
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
                <?php echo "<h4 style=' display:block;' id='modelTitle_0'>" . $data[0]['x3dModelTitle'] . "</h4>" ?>
                <?php echo "<h4 style='display:none;' id='modelTitle_1'>" . $data[1]['x3dModelTitle'] . "</h4>" ?>
                <?php echo "<h4 style='display:none;' id='modelTitle_2'>" . $data[2]['x3dModelTitle'] . "</h4>" ?>
              </Switch>
            </div>
            <div id="container" class="model3D">
              <x3d id="cokeX3D" width="500px" height="500px">
                <scene>
                  <transform>
                    <inline nameSpaceName="cokeX3D" mapDEFToID="true" url="/~lb768/3dapp/assignment/assets/3dModels/coke.x3d"
                      onclick="spin()"></inline>
                  </transform>
                </scene>
              </x3d>
              <x3d id="fantaX3D" width="500px" height="500px" class="hidden">
                <scene>
                  <transform>
                    <inline nameSpaceName="fantaX3D" mapDEFToID="true" url="/~lb768/3dapp/assignment/assets/3dModels/fanta.x3d"
                      onclick="spin()"></inline>
                  </transform>
                </scene>
              </x3d>
              <x3d id="costaX3D" width="500px" height="500px" class="hidden">
                <scene>
                  <transform>
                    <inline nameSpaceName="costaX3D" mapDEFToID="true" url="/~lb768/3dapp/assignment/assets/3dModels/costa.x3d"
                      onclick="spin()"></inline>
                  </transform>
                </scene>
              </x3d>
            </div>
            <div id="x3dCreationMethod_coke">
              <Switch whichChoice="0" id='methodSwitch'>
                <?php echo "<p style=' display:block;' id='method_0'>" . $data[0]['x3dCreationMethod'] . "</p>" ?>
                <?php echo "<p style=' display:none;' id='method_1'>" . $data[1]['x3dCreationMethod'] . "</p>" ?>
                <?php echo "<p style=' display:none;' id='method_2'>" . $data[2]['x3dCreationMethod'] . "</p>" ?>
              </Switch>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="row">
          <div class="col-12 ">
            <div class="card shadow-sm" style="background-color: white;">
              <div class="card-header">
                <p class="m-1">Camera Views</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn border m-1" onclick="cameraFront()">Default</a>
                <a href="#" class="btn border m-1" onclick="cameraLeft()">Left</a>
                <a href="#" class="btn border m-1" onclick="cameraRight()">Right</a>
                <a href="#" class="btn border m-1" onclick="cameraTop()">Top</a>
              </div>
            </div>
          </div>
          <div class="col-12 ">
            <div class="card shadow-sm" style="background-color: white;">
              <div class="card-header">
                <p class="m-1">Render and Lighting</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn border m-1" onclick="toggleWireFrame()">Wire</a>
                <a href="#" class="btn border m-1" onclick="light1()">Light 1</a>
                <a href="#" class="btn border m-1" onclick="light2()">Light 2</a>
                <a href="#" class="btn border m-1" onclick="light3()">Light 3</a>
                <a href="#" class="btn border m-1" onclick="light4()">Light 4</a>
                <a href="#" class="btn border m-1" onclick="light5()">Light 5</a>
                <a href="#" class="btn border m-1" onclick="turnOffAllLights()">Turn off all lights</a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card shadow-sm" style="background-color: white;">
              <div class="card-header">
                <p class="m-1">Animation</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn border m-1" onclick="spin()">Animate</a>
                <a href="#" class="btn border m-1" onclick="stopAnimation()">Stop</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class=" col-12 card shadow-sm" style="background-color: white;">
        <div class="card-title">
          <Switch whichChoice="0" id='TitleSwitch'>
            <?php echo "<h4 style='display:block;' id='title_0' class='m-3'>" . $data[0]['modelTitle'] . "</h4>" ?>
            <?php echo "<h4 style='display:none;' id='title_1' class='m-3'>" . $data[1]['modelTitle'] . "</h4>" ?>
            <?php echo "<h4 style='display:none;' id='title_2' class='m-3'>" . $data[2]['modelTitle'] . "</h4>" ?>
          </Switch>

          <div class="card-body">
            <Switch whichChoice="0" id='descriptionSwitch'>
              <?php echo "<p style='display:block;' id='description_0'>" . $data[0]['modelDescription'] . "</p>" ?>
              <?php echo "<p style='display:none;' id='description_1'>" . $data[1]['modelDescription'] . "</p>" ?>
              <?php echo "<p style='display:none;' id='description_2'>" . $data[2]['modelDescription'] . "</p>" ?>
            </Switch>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class=" col-12 card shadow-sm" style="background-color: white;">
          <div class="card-title">
            <h4 class="m-3">Gallery</h4>
          </div>
          <div class="card-body">
            <div class="gallery" id="gallery"></div>
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
      <p class="m-2">This website was made for the (920G5) Mobile 3D Applications project. This website displays
        three x3d models based on the brand Coca Cola. Created by Layan Boulos</p>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootsrap Js -->
    <script src="/~lb768/3dapp/assignment/js/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'></script>
    <script src="/~lb768/3dapp/assignment/js/modelInteractions.js"></script>
    <script src="/~lb768/3dapp/assignment/js/jquery.fancybox.min.js"></script>
    <script src="/~lb768/3dapp/assignment/js/gallery_generator.js"></script>
    <script src="/~lb768/3dapp/assignment/js/navBar.js"></script>
   

</body>

</html>