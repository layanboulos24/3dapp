document.addEventListener('DOMContentLoaded', function(){})

function cokeScene() {
    nSwitch = 0;
    //logo
    document.getElementById('coke').style.display = "block";
    document.getElementById('fanta').style.display = "none";
    document.getElementById('costa').style.display = "none";
    //navLink
    document.getElementById('cokeTab').classList.add('active');
    document.getElementById('fantaTab').classList.remove('active');
    document.getElementById('costaTab').classList.remove('active');
    //model title
    document.getElementById('modelTitleSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('modelTitle_0').style.display = "block";
    document.getElementById('modelTitle_1').style.display = "none";
    document.getElementById('modelTitle_2').style.display = "none";
    // scene
    document.getElementById('cokeX3D').classList.remove('hidden');
    document.getElementById('fantaX3D').classList.add('hidden');
    document.getElementById('costaX3D').classList.add('hidden');
    // document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
    //method
    document.getElementById('methodSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('method_0').style.display = "block";
    document.getElementById('method_1').style.display = "none";
    document.getElementById('method_2').style.display = "none";
    // title
    document.getElementById('TitleSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('title_0').style.display = "block";
    document.getElementById('title_1').style.display = "none";
    document.getElementById('title_2').style.display = "none";
    // description
    document.getElementById('descriptionSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('description_0').style.display = "block";
    document.getElementById('description_1').style.display = "none";
    document.getElementById('description_2').style.display = "none";
}

function fantaScene() {
    nSwitch = 1;
    // logo
    document.getElementById('coke').style.display = "none";
    document.getElementById('fanta').style.display = "block";
    document.getElementById('costa').style.display = "none";
    //navLink
    document.getElementById('cokeTab').classList.remove('active');
    document.getElementById('fantaTab').classList.add('active');
    document.getElementById('costaTab').classList.remove('active');
    //model title
    document.getElementById('modelTitleSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('modelTitle_0').style.display = "none";
    document.getElementById('modelTitle_1').style.display = "block";
    document.getElementById('modelTitle_2').style.display = "none";
    // scene
    document.getElementById('cokeX3D').classList.add('hidden');
    document.getElementById('fantaX3D').classList.remove('hidden');
    document.getElementById('costaX3D').classList.add('hidden');
    // document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch)
    //method
    document.getElementById('methodSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('method_0').style.display = "none";
    document.getElementById('method_1').style.display = "block";
    document.getElementById('method_2').style.display = "none";
    //title
    document.getElementById('TitleSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('title_0').style.display = "none";
    document.getElementById('title_1').style.display = "block";
    document.getElementById('title_2').style.display = "none"
    // description
    document.getElementById('descriptionSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('description_0').style.display = "none";
    document.getElementById('description_1').style.display = "block";
    document.getElementById('description_2').style.display = "none";
}

function costaScene() {
    nSwitch = 2;
    //logo
    document.getElementById('coke').style.display = "none";
    document.getElementById('fanta').style.display = "none";
    document.getElementById('costa').style.display = "block";
    //navLink
    document.getElementById('cokeTab').classList.remove('active');
    document.getElementById('fantaTab').classList.remove('active');
    document.getElementById('costaTab').classList.add('active');
    //model title
    document.getElementById('modelTitleSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('modelTitle_0').style.display = "none";
    document.getElementById('modelTitle_1').style.display = "none";
    document.getElementById('modelTitle_2').style.display = "block";
    //scene
    document.getElementById('cokeX3D').classList.add('hidden');
    document.getElementById('fantaX3D').classList.add('hidden');
    document.getElementById('costaX3D').classList.remove('hidden');
    // document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch)
    //method
    document.getElementById('methodSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('method_0').style.display = "none";
    document.getElementById('method_1').style.display = "none";
    document.getElementById('method_2').style.display = "block";
    // title
    document.getElementById('TitleSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('title_0').style.display = "none";
    document.getElementById('title_1').style.display = "none";
    document.getElementById('title_2').style.display = "block"
   // description
   document.getElementById('descriptionSwitch').setAttribute('whichChoice', nSwitch);
   document.getElementById('description_0').style.display = "none";
   document.getElementById('description_1').style.display = "none";
   document.getElementById('description_2').style.display = "block";
}

function switchModel(drink) {
    var baseUrl = "/3dapp/3dModels/assets/models/";
    var modelMap = {
      coke: "coke.x3d",
      fanta: "fanta.x3d",
      costa: 'costa.x3d'
    };
    var modelElement = document.getElementById("model");
    modelElement.setAttribute("url", baseUrl + modelMap[drink]);
  
}  

var spinning = false;

function toggleWireFrame(){
    var cokex3d = document.getElementById('cokeX3D');
    var fantax3d = document.getElementById('fantaX3D');
    var costax3d = document.getElementById('costaX3D');
   
    cokex3d.runtime.togglePoints(true);
    cokex3d.runtime.togglePoints(true);

    fantax3d.runtime.togglePoints(true);
    fantax3d.runtime.togglePoints(true);

    costax3d.runtime.togglePoints(true);
    costax3d.runtime.togglePoints(true);
}

function spin()
{
    spinning = !spinning;
    document.getElementById('cokeX3D__Timer').setAttribute('enabled', spinning.toString());
    document.getElementById('fantaX3D__Timer').setAttribute('enabled', spinning.toString());
    document.getElementById('costaX3D__Timer').setAttribute('enabled', spinning.toString());
    
}

function stopAnimation() {
    spinning = false;
    document.getElementById('cokeX3D__Timer').setAttribute('enabled', spinning.toString());
    document.getElementById('fantaX3D__Timer').setAttribute('enabled', spinning.toString());
    document.getElementById('costaX3D__Timer').setAttribute('enabled', spinning.toString());
}

function cameraFront(){
    document.getElementById('cokeX3D__View_CameraFront').setAttribute('bind', 'true');
    document.getElementById('fantaX3D__View_CameraFront').setAttribute('bind', 'true');
    document.getElementById('costaX3D__View_CameraFront').setAttribute('bind', 'true');
}

function cameraRight(){
    document.getElementById('cokeX3D__View_CameraRight').setAttribute('bind', 'true');
    document.getElementById('fantaX3D__View_CameraRight').setAttribute('bind', 'true');
    document.getElementById('costaX3D__View_CameraRight').setAttribute('bind', 'true');
}

function cameraLeft(){
    document.getElementById('cokeX3D__View_CameraLeft').setAttribute('bind', 'true');
    document.getElementById('fantaX3D__View_CameraLeft').setAttribute('bind', 'true');
    document.getElementById('costaX3D__View_CameraLeft').setAttribute('bind', 'true');
}

function cameraTop(){
    document.getElementById('cokeX3D__View_CameraTop').setAttribute('bind', 'true');
    document.getElementById('fantaX3D__View_CameraTop').setAttribute('bind', 'true');
    document.getElementById('costaX3D__View_CameraTop').setAttribute('bind', 'true');
}

var lightOn1 = true;
var lightOn2 = true;
var lightOn3 = true;
var lightOn4 = true;
var lightOn5 = true;
var lightOn6 = true;

function light1(){
    // var lightOn1 = document.getElementById('model__LIGHT_Light_1').getAttribute('on');
    document.getElementById('cokeX3D__LIGHT_Light_1').setAttribute('on', lightOn1.toString())
    document.getElementById('fantaX3D__LIGHT_Light_1').setAttribute('on', lightOn1.toString())
    document.getElementById('costaX3D__LIGHT_Light_1').setAttribute('on', lightOn1.toString())
}

function light2(){
    lightOn2 = !lightOn2
    document.getElementById('cokeX3D__LIGHT_Light_2').setAttribute('on', lightOn2.toString())
    document.getElementById('fantaX3D__LIGHT_Light_2').setAttribute('on', lightOn2.toString())
    document.getElementById('costaX3D__LIGHT_Light_2').setAttribute('on', lightOn2.toString())
    
}

function light3(){
    lightOn3 = !lightOn3
    document.getElementById('cokeX3D__LIGHT_Light_3').setAttribute('on', lightOn3.toString())
    document.getElementById('fantaX3D__LIGHT_Light_3').setAttribute('on', lightOn3.toString())
    document.getElementById('costaX3D__LIGHT_Light_3').setAttribute('on', lightOn3.toString())
    
}

function light4(){
    lightOn4 = !lightOn4
    document.getElementById('cokeX3D__LIGHT_Light_4').setAttribute('on', lightOn4.toString())
    document.getElementById('fantaX3D__LIGHT_Light_4').setAttribute('on', lightOn4.toString())
    document.getElementById('costaX3D__LIGHT_Light_4').setAttribute('on', lightOn4.toString())
    
}

function light5(){
    lightOn5 = !lightOn5
    document.getElementById('cokeX3D__LIGHT_Light_5').setAttribute('on', lightOn5.toString())
    document.getElementById('fantaX3D__LIGHT_Light_5').setAttribute('on', lightOn5.toString())
    document.getElementById('costaX3D__LIGHT_Light_5').setAttribute('on', lightOn5.toString())
}

function turnOffAllLights(){
    document.getElementById('cokeX3D__LIGHT_Light_1').setAttribute('on', 'false');
    document.getElementById('cokeX3D__LIGHT_Light_2').setAttribute('on', 'false');
    document.getElementById('cokeX3D__LIGHT_Light_3').setAttribute('on', 'false');
    document.getElementById('cokeX3D__LIGHT_Light_4').setAttribute('on', 'false');
    document.getElementById('cokeX3D__LIGHT_Light_5').setAttribute('on', 'false');

    document.getElementById('fantaX3D__LIGHT_Light_1').setAttribute('on', 'false');
    document.getElementById('fantaX3D__LIGHT_Light_2').setAttribute('on', 'false');
    document.getElementById('fantaX3D__LIGHT_Light_3').setAttribute('on', 'false');
    document.getElementById('fantaX3D__LIGHT_Light_4').setAttribute('on', 'false');
    document.getElementById('fantaX3D__LIGHT_Light_5').setAttribute('on', 'false');

    document.getElementById('costaX3D__LIGHT_Light_1').setAttribute('on', lightOn1.toString())
    document.getElementById('costaX3D__LIGHT_Light_2').setAttribute('on', lightOn2.toString())
    document.getElementById('costaX3D__LIGHT_Light_3').setAttribute('on', lightOn3.toString())
    document.getElementById('costaX3D__LIGHT_Light_4').setAttribute('on', lightOn1.toString())
    document.getElementById('costaX3D__LIGHT_Light_5').setAttribute('on', lightOn1.toString())
}