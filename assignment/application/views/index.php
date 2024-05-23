<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: rgb(24, 24, 23);">  
  <nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <!-- <img src="https://static.thcdn.com/images/small/original/widgets/190-en/42/original-original-Kaizen_Brand_Image_copy-045749_newheight-115742.png" alt="Coca-Cola Logo" height="40"> -->
        <img src="../assets/images/Coca-Cola_logo.svg.png" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apicocacola.php">
              Models
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main Content -->
  <div class="container mt-2">
    <div class="row">
      <img style="height: 600px; border-radius: 2%;" src="../application/assets/images/main3.jpg" class="img-fluid w-100" alt="Coca Cola">
    </div>
    <div class="row" style="padding-top: 10px;">
      <div class="col-lg-4" >
        <div class="card" style="border-width: 0px; border-radius: 5%;">
          <img src="../application/assets/images/coca_cola.jpg" class="card-img-top" alt="Coca Cola">
          <div class="card-body">
            <h5 class="card-title">Coca Cola</h5>
            <p class="card-text">Coca-Cola, or Coke, is a carbonated soft drink manufactured by the Coca-Cola Company.</p>
            <a href="apiCocaCola" class="btn btn-primary">Find out more..</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="border-width: 0px;">
          <img src="../application/assets/images/sprite.jpg" class="card-img-top" alt="Sprite">
          <div class="card-body">
            <h5 class="card-title">Sprite</h5>
            <p class="card-text">Sprite is a clear, lemon-lime flavored soft drink created by the Coca-Cola Company.</p>
            <a href="apiCocaCola" class="btn btn-primary">Find out more..</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="border-width: 0px;">
          <img src="../application/assets/images/dr_pepper.jpg" class="card-img-top" alt="Dr Pepper">
          <div class="card-body">
            <h5 class="card-title">Dr Pepper</h5>
            <p class="card-text">Dr Pepper is a carbonated soft drink created in the 1880s by pharmacist Charles Alderton.</p>
            <a href="apiCocaCola" class="btn btn-primary">Find out more..</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
