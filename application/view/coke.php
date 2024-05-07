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
    <div class="text-center coke container d-flex justify-content-center">
      <div class="text-danger text-centre coke container-fluid" id="coke">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          </a>
      </div>
    </div>
    <div class="container  justify-content-center ">
      <div class="row">
        <div class="col-6 card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" onmouseup="cokeScene()">Coke</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " onmouseup="fantaScene();">Fanta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " onmouseup="costaScene();">Costa</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <h4 class="card-title">Coke Can</h4>
            <div id="container" class="model3D">
              <x3d id="myX3D" width="700px" height= "500px"> 
                <scene>
                  <!-- <inline url="/3dapp/assets/3dModels/coke.x3d"> </inline>  -->
                  <Switch whichChoice="0" id='SceneSwitch'>
                    <transform>
                      <inline nameSpaceName="model" mapDEFToID="true" url="/3dapp/assets/3dModels/coke.x3d"></inline>
                    </transform>
                    <transform>
                      <inline nameSpaceName="model" mapDEFToID="true" url="/3dapp/assets/3dModels/fanta.x3d"></inline>
                    </transform>
                    <transform>
                      <inline nameSpaceName="model" mapDEFToID="true" url="/3dapp/assets/3dModels/costa.x3d"></inline>
                    </transform>
                  </Switch>
                </scene> 
              </x3d>
            </div>
            <div id="x3dCreationMethod_coke"><?php echo $data['coke']['x3dCreationMethod']; ?></div>
           
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
                  <a href="#" class="btn">Default</a>
                  <a href="#" class="btn">Back</a>
                  <a href="#" class="btn">Left</a>
                  <a href="#" class="btn">Right</a>
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
                  <a href="#" class="btn">Back</a>
                  <a href="#" class="btn">Left</a>
                  <a href="#" class="btn">Right</a>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <p>Animation</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn">Animate</a>
                  <a href="#" class="btn">Rotate Left</a>
                  <a href="#" class="btn">Rotate Right</a>
                  <a href="#" class="btn">Stop</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class=" col card">
          <div class="card-title">
            <div id="title_coke" class="drinksText"></div>
            <div id="title_fanta" class="drinksText"></div>
            <div id="title_costa" class="drinksText"></div>
            
          <div class="card-body">
            <div id="description_coke">
            <div id="description_fanta">
            <div id="description_costa">
          </div>
        </div>
      </div>
      <div class="row">
        <div class=" col card">
          <div class="card-header">
            Gallery
          </div>
          <div class="card-body">
          </div>
        </div>
      </div>
    <div>
    <script> 
      var spinning = false;

      function toggleWireFrame(){
        var x3dElement = document.getElementById('myX3D');
       
        x3dElement.runtime.togglePoints(true);
        x3dElement.runtime.togglePoints(true);
      }

      function toggleSpin() {
        spinning = !spinning;
        document.getElementById('myX3D__RotationTimer').setAttribute('enabled', spinning.toString());
        
      }
      var lightOn = true;

      function headlight()
      {
        lightOn = !lightOn;
        document.getElementById('myX3D__headlight').setAttribute('headlight', lightOn.toString());
      }
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
    <!-- <script src="/3dapp/js/getJsonData.js"></script> -->
</body>
</html>