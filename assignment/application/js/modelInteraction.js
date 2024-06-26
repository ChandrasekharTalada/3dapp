//adapted from example code 'benskitchen.com'
function changeLook(){
    var c;
    if(c==null){
      c=0;
      document.getElementById('body').style.backgroundColor='#000000';
      c=1;
    }
    else if(c==1){
      document.getElementById('body').style.backgroundColor='#FFF000';
      c++;
    }
    else if(c==2){
      document.getElementById('body').style.backgroundColor='#000FFF';
      c=0;
    }
  }
  function resetLook(){
    document.getElementById('body').style.backgroundColor='#FFF';
  }
function cokeScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('cokeName').style.display = 'block';
    document.getElementById('spriteName').style.display = 'none';
    document.getElementById('pepperName').style.display = 'none';
    document.getElementById('coke3Ddescription').style.display = 'block';
    document.getElementById('sprite3Ddescription').style.display = 'none';
    document.getElementById('pepper3Ddescription').style.display = 'none';
}

function spriteScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('cokeName').style.display = 'none';
    document.getElementById('spriteName').style.display = 'block';
    document.getElementById('pepperName').style.display = 'none';
    document.getElementById('coke3Ddescription').style.display = 'none';
    document.getElementById('sprite3Ddescription').style.display = 'block';
    document.getElementById('pepper3Ddescription').style.display = 'none';
}

function pepperScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
    document.getElementById('cokeName').style.display = 'none';
    document.getElementById('spriteName').style.display = 'none';
    document.getElementById('pepperName').style.display = 'block';
    document.getElementById('coke3Ddescription').style.display = 'none';
    document.getElementById('sprite3Ddescription').style.display = 'none';
    document.getElementById('pepper3Ddescription').style.display = 'block';
}

// var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

function wireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;
var light1On = true;
var light2On = true;
var light3On = true;
var light4On = true;
var light5On = true;
var light6On = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('model__NavInfo001').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}
var lightNum;
function omniLight(lightNum)
{
  switch(lightNum){
    case 1:
      light1On = !light1On;
	document.getElementById('model__Omni001').setAttribute('on', light1On.toString());
	console.log(light1On);
      break;
    case 2:
      light2On = !light2On;
	document.getElementById('model__Omni002').setAttribute('on', light2On.toString());
	console.log(light2On);
      break;
    case 3:
      light3On = !light3On;
	document.getElementById('model__Omni003').setAttribute('on', light3On.toString());
	console.log(light3On);
      break;
    case 4:
      light4On = !light4On;
	document.getElementById('model__Omni004').setAttribute('on', light4On.toString());
	console.log(light4On);
      break;
    case 5:
      light5On = !light5On;
	document.getElementById('model__Omni005').setAttribute('on', light5On.toString());
	console.log(light5On);
      break;
    case 6:
      light6On = !light6On;
	document.getElementById('model__Omni006').setAttribute('on', light6On.toString());
	console.log(light6On);
      break;
  }
}

function targetLight()
{
	lightOn = !lightOn;
	document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraUp').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBot').setAttribute('bind', 'true');
}

function showPolygon() {
  transformNode.setAttribute('render', 'polygon' , 'edgedfaces');
}