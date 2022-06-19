<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TELIFE</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
  <body>
    <script>
      $(document).ready(function() {
        $("#resultform").hide()
        $("#foodform").submit(function(event){
            event.preventDefault();
            var request;
            var serviceurl = "http://127.0.0.1:9080/api/food/"
            var $form = $(this)
            var jsonobj = new Object();
            jsonobj.energy = $form.find('input[name="energy"]').val(),
            jsonobj.carbo = $form.find('input[name="carbo"]').val(),
            jsonobj.protein = $form.find('input[name="protein"]').val(),
            jsonobj.fat = $form.find('input[name="fat"]').val(),
            jsonobj.fiber = $form.find('input[name="fiber"]').val(),
            jsonobj.cholestrol = $form.find('input[name="cholestrol"]').val(), 
            
            posting = $.ajax({
                url: serviceurl,
                type: "POST",
                dataType: "json",
                data: JSON.stringify(jsonobj),
                contentType: "application/json"
            });

            posting.done(function (response, textStatus, jqXHR){
                console.log(response)
                // var res = JSON.parse(response)
                $("#resultform").show()
                for (let index = 0; index < 3; index++) {
                  $("#nama"+index).text(response.data[index].nama)
                  $("#pic"+index).attr("src", response.data[index].pic_url)
                }
            });

            posting.fail(function (jqXHR, textStatus, errorThrown){
                console.error(
                    "The following error occurred: "+
                    textStatus, errorThrown
                );
            });
        });
      });
    </script>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="/">TELIFE</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="about">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact">Feedback</a></li>
                            <li class="nav-item"><a class="nav-link" href="profile">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="food">AI Food Recommendation</a></li>
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
              <form id="foodform">
              <div class="mt-2">
                  <label for="energy" class="form-label">Energy : <span id="venergy"></span></label>
                  <input type="range" class="form-range" id="energy" name="energy" min="71", max="477", value="71" step="0.01">
              </div>
              <div class="mt-2">
                  <label for="carbo" class="form-label">Carbo : <span id="vcarbo"></span></label>
                  <input type="range" class="form-range" id="carbo" name="carbo" min="0", max="85", value="0" step="0.01">
              </div>
              <div class="mt-2">
                  <label for="protein" class="form-label">Protein : <span id="vprotein"></span></label>
                  <input type="range" class="form-range" id="protein" name="protein" min="0", max="40", value="0" step="0.01">
              </div>
              <div class="mt-2">
                  <label for="fat" class="form-label">Fat : <span id="vfat"></span></label>
                  <input type="range" class="form-range" id="fat" name="fat" min="0", max="30", value="0" step="0.01">
              </div>
              <div class="mt-2">
                  <label for="fiber" class="form-label">Fiber : <span id="vfiber"></span></label>
                  <input type="range" class="form-range" id="fiber" name="fiber" min="0", max="20", value="0" step="0.01">
              </div>
              <div class="mt-2">
                  <label for="cholesterol" class="form-label">Cholesterol : <span id="vcholesterol"></span></label>
                  <input type="range" class="form-range" id="cholesterol" name="cholestrol" min="0", max="1", value="0" step="0.01">
              </div>
              <div class="mt-3 mb-2 text-center">
                  <input type="submit" class="btn btn-primary" id="submitButton" name="submitButton" value="Submit">
              </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-8" id="resultform">
          <h3>Result :</h3>
          <div>
              <div class="row">
                  <div class="col-sm-4">
                      <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img id="pic0" src="" class="card-img">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title" id="nama0">Card title</h5>
                                </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img id="pic1" src="" class="card-img" >
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title" id="nama1">Card title</h5>
                                </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img id="pic2" src="" class="card-img">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title" id="nama2">Card title</h5>
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
        var slider4 = document.getElementById("protein");
        var slider5 = document.getElementById("fat");
        var slider6 = document.getElementById("fiber");
        var slider7 = document.getElementById("cholesterol");

        var output1 = document.getElementById("venergy");
        var output2 = document.getElementById("vcarbo");
        var output4 = document.getElementById("vprotein");
        var output5 = document.getElementById("vfat");
        var output6 = document.getElementById("vfiber");
        var output7 = document.getElementById("vcholesterol");

        output1.innerHTML = slider1.value;
        output2.innerHTML = slider2.value;
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