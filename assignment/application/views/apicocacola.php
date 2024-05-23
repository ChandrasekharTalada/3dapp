<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../application/css/x3dom.css">
  <script type="text/javascript" src="../application/js/x3dom.js"></script>
  <script type="text/javascript" src="../application/js/modelInteraction.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../application/js/getJsonData.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <link href="../application/css/App.css" rel="stylesheet">
</head>

<body style="border-radius: 2%;">

  <nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container">
      <a class="navbar-brand" href="apiCocaCola">
        <img src="../application/assets/images/Coca-Cola_logo.svg.png" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);" onclick="showSection('homeSection');">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);" onclick="showSection('body');">Models</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="contactModalLabel">Contact Us</h3>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Chandrasekhar Srinivas, Brighton.</p>
            <p> Email: C.Talada@sussex.ac.uk</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <div id="homeSection" class="container mt-2">
    <div class="row">
      <img style="height: 600px; border-radius: 2%;" src="../application/assets/images/main3.jpg" class="img-fluid w-100" alt="Coca Cola">
    </div>
    <div class="row" style="padding-top: 10px;">
      <div class="col-lg-4">
        <div class="card" style="border-width: 0px; border-radius: 5%;">
          <img src="../application/assets/images/coca_cola.jpg" class="card-img-top" alt="Coca Cola">
          <div class="card-body">
            <h5 class="card-title">Coca Cola</h5>
            <div id=cocacolaCardTitle></div>
            <div id=cocacolaCardSubTitle></div>
            <div id=cocacolaCardDescription></div>
            <a href="https://www.coca-cola.com/gb/en" class="btn btn-primary">Find out more..</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="border-width: 0px;">
          <img src="../application/assets/images/sprite.jpg" class="card-img-top" alt="Sprite">
          <div class="card-body">
            <div id=spriteCardTitle></div>
            <div id=spriteCardSubTitle></div>
            <div id=spriteCardDescription></div>
            <a href="https://www.coca-cola.com/gb/en" class="btn btn-primary">Find out more..</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="border-width: 0px;">
          <img src="../application/assets/images/dr_pepper.jpg" class="card-img-top" alt="Dr Pepper">
          <div class="card-body">
            <div id=pepperCardTitle></div>
            <div id=pepperCardSubTitle></div>
            <div id=pepperCardDescription></div>
            <a href="https://www.coca-cola.com/gb/en" class="btn btn-primary">Find out more..</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="modelSection">
    <div id="body" style="padding-top: 3px; background-color: #fff; margin-left: 15px; margin-right: 15px;">
      <div class="container mt-4">
        <!-- Models Section -->
        <div class="card mb-3">
          <div class="card-header"><h4 style="text-align: center;">3D Models</h4></div>
          <div class="card-body">
            <div class="d-flex justify-content-around">
              <a class="btn btn-primary" onMouseUp="cokeScene();">Coca Cola</a>
              <a class="btn btn-primary" onMouseUp="spriteScene();">Sprite</a>
              <a class="btn btn-primary" onMouseUp="pepperScene();">Dr Pepper</a>
            </div>
          </div>
        </div>
        <div class="row" style="padding-top: 2px; border-radius: 2%;" display='None'>
          <div class="col-xs-10 col-sm-8">
            <div id="modelStyle">
              <x3d id="wire" style="height:400px;">
                <div id="cokeName"></div>
                <div id="spriteName" style="display:none;"></div>
                <div id="pepperName" style="display:none;"></div>
                <scene>
                  <Switch whichChoice="1" id='SceneSwitch'>
                    <transform id="modelTransform">
                      <inline nameSpaceName="model" mapDEFToID="true" url="../application\assets\x3d\pepper.x3d"></inline>
                    </transform>
                    <transform id="modelTransform">
                      <inline nameSpaceName="model" mapDEFToID="true" url="../application\assets\x3d\coke.x3d"></inline>
                    </transform>
                    <transform id="modelTransform">
                      <inline nameSpaceName="model" mapDEFToID="true" url="../application\assets\x3d\sprite.x3d"></inline>
                    </transform>
                    
                  </Switch>
                </scene>
                <div id="coke3Ddescription"></div>
                <div id="sprite3Ddescription" style="display:none;"></div>
                <div id="pepper3Ddescription" style="display:none;"></div>
              </x3d>
            </div>
          </div>
          <div class="col-xs-10 col-sm-4">
            <div class="card mb-3">
              <div class="card-header">Views</div>
              <div class="card-body" style="padding:5px">
                <button onclick="cameraFront()" type="button" class="btn btn-secondary mr-2">Front</button>
                <button onclick="cameraBack()" type="button" class="btn btn-secondary mr-2">Back</button>
                <button onclick="cameraLeft()" type="button" class="btn btn-secondary mr-2">Left</button>
                <button onclick="cameraRight()" type="button" class="btn btn-secondary mr-2">Right</button>
                <button onclick="cameraTop()" type="button" class="btn btn-secondary mr-2">Top</button>
                <button onclick="cameraBottom()" type="button" class="btn btn-secondary mr-2">Bottom</button>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-header">Animation</div>
              <div class="card-body" style="padding:5px">
                <button id="spinButtonX" type="button" class="btn btn-secondary mr-2">Spin X</button>
                <button id="spinButtonY" type="button" class="btn btn-secondary mr-2">Spin Y</button>
                <button id="spinButtonZ" type="button" class="btn btn-secondary mr-2">Spin Z</button>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-header">Manipulate</div>
              <div class="card-body" style="padding:5px">
                <button onclick="wireFrame()" type="button" class="btn btn-secondary mr-2">WireFrame</button>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-header">Lights</div>
              <div class="card-body" style="padding:5px">
                <div class="d-flex mb-2">
                  <button onclick="headLight()" type="button" class="btn btn-secondary mr-2">Headlight On/Off</button>
                  &nbsp;
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="omniDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      Omni Lights
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="omniDropdown">
                      <li><a class="dropdown-item" href="#" onclick="omniLight(1)">Omni 1 On/Off</a></li>
                      <li><a class="dropdown-item" href="#" onclick="omniLight(2)">Omni 2 On/Off</a></li>
                      <li><a class="dropdown-item" href="#" onclick="omniLight(3)">Omni 3 On/Off</a></li>
                      <li><a class="dropdown-item" href="#" onclick="omniLight(4)">Omni 4 On/Off</a></li>
                      <li><a class="dropdown-item" href="#" onclick="omniLight(5)">Omni 5 On/Off</a></li>
                      <li><a class="dropdown-item" href="#" onclick="omniLight(6)">Omni 6 On/Off</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <h1 class="my-4">Dynamic Image Gallery</h1>
          <div class="gallery" id='Gallery'></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
          $(document).ready(function(){
            // Load the gallery from the PHP file using AJAX
            $.ajax({
              url: '../application/php/gallery.php',
              type: 'GET',
              success: function(data) {
                  $('#gallery').html(data);
              },
              error: function() {
                  $('#gallery').html('<p>There was an error loading the gallery.</p>');
              }
            });
          });

          let spinning = false;
          let rotation = 0;
          const transformNode = document.getElementById('modelTransform');

          function spinModelX() {
            if (spinning) {
                rotation += 0.01;
                transformNode.setAttribute('rotation', `0 1 0 ${rotation}`);
                requestAnimationFrame(spinModelX);
            }
            console.log('${rotation}');
          }

          document.getElementById('spinButtonX').addEventListener('click', function() {
            spinning = !spinning;
            if (spinning) {
                spinModelX();
                this.textContent = 'Stop Spinning';
            } else {
                this.textContent = 'Spin X';
            }
          });

          function spinModelY() {
            if (spinning) {
                rotation += 0.01;
                transformNode.setAttribute('rotation', `1 0 0 ${rotation}`);
                requestAnimationFrame(spinModelY);
            }
            console.log('${rotation}');
          }

          document.getElementById('spinButtonY').addEventListener('click', function() {
            spinning = !spinning;
            if (spinning) {
                spinModelY();
                this.textContent = 'Stop Spinning';
            } else {
                this.textContent = 'Spin Y';
            }
          });

          function spinModelZ() {
            if (spinning) {
                rotation += 0.02;
                transformNode.setAttribute('rotation', `0 0 1 ${rotation}`);
                requestAnimationFrame(spinModelZ);
            }
          }

          document.getElementById('spinButtonZ').addEventListener('click', function() {
            spinning = !spinning;
            if (spinning) {
                spinModelZ();
                this.textContent = 'Stop Spinning';
            } else {
                this.textContent = 'Spin Z';
            }
          });
          function showSection(sectionId) {
          // Hide all sections
          document.getElementById('homeSection').style.display = 'none';
          document.getElementById('body').style.display = 'none';

          // Show the selected section
          document.getElementById(sectionId).style.display = 'block';
          }
          // Initialize by showing the home section by default
          document.addEventListener('DOMContentLoaded', function() {
            showSection('homeSection');
          });
        </script>
      </div>
    </div>
  </section>
      <footer style="background-color: rgb(235, 248, 209);">
        <p>2024 Your Website</p>
        <p>Click <a href="javascript:changeLook()">restyle</a> <a href="javascript:resetLook()">Reset</a></p>
      </footer>
  </body>
</html>
