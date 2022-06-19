<!DOCTYPE html>
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
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/aos.css') }}" rel="stylesheet" />

    </head>
    <body class="d-flex flex-column">
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
                            <li class="nav-item"><a class="nav-link" href="obatPricing">Order Obat</a></li>
                        </ul>
                    </div>
                    <a href="login" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Sign In</a>
                </div>
            </nav>
            <!-- Pricing section-->
            <div class="site-section" style="margin-top: 5%;">
                <div class="container">
                  <div class="row mb-5">
                    <form class="col-md-12" method="post">
                      <div class="site-blocks-table">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th class="product-name">Product</th>
                              <th class="product-price">Price</th>
                              <th class="product-quantity">Quantity</th>
                              <th class="product-total">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="product-name">
                                <h2 class="h5 text-black">Paket Vitamin</h2>
                              </td>
                              <td>$49.00</td>
                              <td>
                                <div class="input-group mb-3" style="max-width: 120px;">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                  </div>
                                  <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                  <div class="input-group-append">
                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                  </div>
                                </div>
          
                              </td>
                              <td>$49.00</td>
                              
                            </tr>
          
                            <tr>
                              <td class="product-name">
                                <h2 class="h5 text-black">Paket Vitamin 2</h2>
                              </td>
                              <td>$49.00</td>
                              <td>
                                <div class="input-group mb-3" style="max-width: 120px;">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                  </div>
                                  <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                  <div class="input-group-append">
                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                  </div>
                                </div>
          
                              </td>
                              <td>$49.00</td>
                              
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </form>
                  </div>
          
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row mb-5">
                        <div class="col-md-6 mb-3 mb-md-0">
                          <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-outline-primary btn-sm btn-block">Back</button>
                        </div>
                      </div>
                      <!-- <div class="row">
                        <div class="col-md-12">
                          <label class="text-black h4" for="coupon">Coupon</label>
                          <p>Enter your coupon code if you have one.</p>
                        </div>
                        <div class="col-md-8 mb-3 mb-md-0">
                          <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-sm px-4">Apply Coupon</button>
                        </div>
                      </div> -->
                    </div>
                    <div class="col-md-6 pl-5">
                      <div class="row justify-content-end">
                        <div class="col-md-7">
                          <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                              <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-md-6">
                              <span class="text-black">Subtotal</span>
                            </div>
                            <div class="col-md-6 text-right">
                              <strong class="text-black">$230.00</strong>
                            </div>
                          </div>
                          <div class="row mb-5">
                            <div class="col-md-6">
                              <span class="text-black">Total</span>
                            </div>
                            <div class="col-md-6 text-right">
                              <strong class="text-black">$230.00</strong>
                            </div>
                          </div>
          
                          <div class="row">
                            <div class="col-md-12">
                              <button class="btn btn-primary btn-lg btn-block"><a href="obatCheckout" style="color: white;">Proceed To Checkout</a></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>

    </body>
</html>
