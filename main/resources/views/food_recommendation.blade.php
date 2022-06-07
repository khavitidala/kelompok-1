<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Recommendation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="index">TELIFE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="chat">Konselor</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                </ul>
            </div>
            <a href="login" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Sign In</a>
        </div>
    </nav>
    <div class="container">
        <div class="mt-3">
            <h1>Food Recommendation</h1>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="container" style="border: 3px solid black; border-radius: 25px; width: 300px;">
              <div class="mt-2">
                  <label for="customRange1" class="form-label">Energy : <span id="venergy"></span></label>
                  <input type="range" class="form-range" id="energy" min="71", max="477", value="71">
              </div>
              <div class="mt-2">
                  <label for="customRange1" class="form-label">Carbo : <span id="vcarbo"></span></label>
                  <input type="range" class="form-range" id="carbo" min="0", max="82", value="0">
              </div>
              <div class="mt-2">
                  <label for="customRange1" class="form-label">Sugar : <span id="vsugar"></span></label>
                  <input type="range" class="form-range" id="sugar" min="0", max="45", value="0">
              </div>
              <div class="mt-2">
                  <label for="customRange1" class="form-label">Protein : <span id="vprotein"></span></label>
                  <input type="range" class="form-range" id="protein" min="0", max="36", value="0" >
              </div>
              <div class="mt-2">
                  <label for="customRange1" class="form-label">Fat : <span id="vfat"></span></label>
                  <input type="range" class="form-range" id="fat" min="0", max="27", value="0">
              </div>
              <div class="mt-2">
                  <label for="customRange1" class="form-label">Fiber : <span id="vfiber"></span></label>
                  <input type="range" class="form-range" id="fiber" min="0", max="18", value="0">
              </div>
              <div class="mt-2">
                  <label for="customRange1" class="form-label">Cholesterol : <span id="vcholesterol"></span></label>
                  <input type="range" class="form-range" id="cholesterol" min="0", max="0.7", value="0" step="0.1">
              </div>
              <div class="mt-3 mb-2 text-center">
                  <button class="btn btn-primary">Submit</button>
              </div>
          </div>
        </div>
        <div class="col-sm-8">
          <h3>Result :</h3>
          <div>
              <div class="row">
                  <div class="col-sm-4">
                      <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="..." class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="..." class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="..." class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
              </div>
          </div>
        </div>
      </div>
    </div>
        
        <div class="mt-5">
            
        </div>
    </div>
    


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        var slider1 = document.getElementById("energy");
        var slider2 = document.getElementById("carbo");
        var slider3 = document.getElementById("sugar");
        var slider4 = document.getElementById("protein");
        var slider5 = document.getElementById("fat");
        var slider6 = document.getElementById("fiber");
        var slider7 = document.getElementById("cholesterol");

        var output1 = document.getElementById("venergy");
        var output2 = document.getElementById("vcarbo");
        var output3 = document.getElementById("vsugar");
        var output4 = document.getElementById("vprotein");
        var output5 = document.getElementById("vfat");
        var output6 = document.getElementById("vfiber");
        var output7 = document.getElementById("vcholesterol");

        output1.innerHTML = slider1.value;
        output2.innerHTML = slider2.value;
        output3.innerHTML = slider3.value;
        output4.innerHTML = slider4.value;
        output5.innerHTML = slider5.value;
        output6.innerHTML = slider6.value;
        output7.innerHTML = slider7.value;

        slider1.oninput = function() {
          output1.innerHTML = this.value;
        }
        slider2.oninput = function() {
          output2.innerHTML = this.value;
        }
        slider2.oninput = function() {
          output2.innerHTML = this.value;
        }
        slider3.oninput = function() {
          output3.innerHTML = this.value;
        }
        slider4.oninput = function() {
          output4.innerHTML = this.value;
        }
        slider5.oninput = function() {
          output5.innerHTML = this.value;
        }
        slider6.oninput = function() {
          output6.innerHTML = this.value;
        }
        slider7.oninput = function() {
          output7.innerHTML = this.value;
        }
    </script>
  </body>
</html>