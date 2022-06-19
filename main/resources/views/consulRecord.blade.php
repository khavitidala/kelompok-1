<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TELIFE</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
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
                    <a href="logout" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Logout</a>
                </div>
            </nav>

            <!-- Mood tracing system -->
            <div class="container d-flex justify-content-center" style="margin-top: 3%;">
                <div class="card w-75" style="margin-bottom: 30px; background-color: #CED4D9;">
                    <div class="d-flex flex-row justify-content-between p-3 adiv text-white"></div>
                    <form method="post" action="{{ route('create_mood') }}" >
                        {{ csrf_field() }}
                        <div class="mt-2 p-4 text-center">
                            <h1 class="fw-bolder">Mood Tracking System</h1>
                            <h4>Tracking your Mood Every Single Day</h4> 
                            <p style="font-size: 14px; margin-top: 1%;">Let us know about how you feel today.</p>
                            <!-- <div class="d-flex flex-row justify-content-center mt-2"> <img src="https://img.icons8.com/emoji/48/000000/angry-face-emoji--v2.png" /> <img src="https://img.icons8.com/fluent/48/000000/sad.png" /> <img src="https://img.icons8.com/color/48/000000/happy.png" /> <img src="https://img.icons8.com/emoji/48/000000/smiling-face.png" /> <img src="https://img.icons8.com/color/48/000000/lol.png" /> </div> -->
                            
                            <div class="form-group mt-4"> 
                                <input class="form-control" type="text" name="nama" placeholder="Full Name" maxlength="100"/> 
                            </div>

                            <div class="form-group mt-4">
                                <p style="font-size: 14px;">What do u feel today?</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Sad"> 
                                    <label for="radio_0" class="custom-control-label">Sad</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Grateful"> 
                                    <label for="radio_1" class="custom-control-label">Grateful</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Happy"> 
                                    <label for="radio_2" class="custom-control-label">Happy</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_3" type="radio" class="custom-control-input" value="Anxious"> 
                                    <label for="radio_3" class="custom-control-label">Anxious</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_4" type="radio" class="custom-control-input" value="Stress"> 
                                    <label for="radio_4" class="custom-control-label">Stress</label>
                                </div>
                            </div>

                            <div class="form-group mt-4"> 
                                <textarea class="form-control" name="note" rows="4" placeholder="Write a note"></textarea> 
                            </div>

                            <div class="form=group mt-4"> 
                                <button type="submit" class="btn btn-primary btn-block"><span>Save Today's Mood</span></button> 
                            </div>
                                
                            <div class="text-center fs-6" style="margin-top: 10px;">
                                Read your journal <a href="mts"> click here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Page Content-->
            <section>
            <div class="row justify-content-center" style="margin-top:5%">
                <div class="col-3">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Health Record</h1>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="container mt-4">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Data Medical Record
                        </button>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse panel-collapse" >
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Medical Record</h3>
                                <span class="float-left">{{ session('msg') }}</span>
                                <a href="/consulRecord/create" class="btn btn-primary">Tambah Record</a><br /><br />
                                <table class="table table-bordered table-striped table-hover">
                                    <tr>
                                        <th>NIM</th>
                                        <th>Diagnosa</th>
                                        <th>treatment</th>
                                        <th>dibuat Tanggal</th>
                                    </tr>
                                        
                                    @foreach($record as $d)
                                        <tr>
                                            <td>{{ $d->nomor_induk_pasien }}</td>
                                            <td>{{ $d->diagnosa }}</td>
                                            <td>{{ $d->treatment }}</td>
                                            <td>{{ $d->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--  -->           
            </section>
        </main>

        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; TELIFE 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
