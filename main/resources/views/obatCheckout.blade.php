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
                        <li class="nav-item"><a class="nav-link" href="index">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="about">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="chat">Konselor</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact">Feedback</a></li>
                    </ul>
                </div>
                <a href="login" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Sign In</a>
            </div>
            </nav>
            <!-- Checkout section-->
            <div class="site-section">
              <div class="container">
                <div class="row" style="margin-top: 2%;">
                  <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">Billing Details</h2>
                    <div class="p-3 p-lg-5 border">
                      <div class="form-group row">
                        <div class="col-md-6">
                          <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_fname" name="c_fname">
                        </div>
                        <div class="col-md-6">
                          <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_lname" name="c_lname">
                        </div>
                      </div>
        
                      <div class="form-group row">
                        <div class="col-md-12">
                          <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                        </div>
                      </div>
        
                      <div class="form-group row mb-5">
                        <div class="col-md-6">
                          <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                        </div>
                        <div class="col-md-6">
                          <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                        </div>
                      </div>
        
                      <div class="form-group">
                        <label for="c_order_notes" class="text-black">Order Notes</label>
                        <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                      </div>
        
                    </div>
                  </div>
                  <div class="col-md-6">
                    
                    <div class="row mb-5">
                      <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Your Order</h2>
                        <div class="p-3 p-lg-5 border">
                          <table class="table site-block-order-table mb-5">
                            <thead>
                              <th>Product</th>
                              <th>Total</th>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
                                <td>$250.00</td>
                              </tr>
                              <tr>
                                <td>Polo Shirt <strong class="mx-2">x</strong>   1</td>
                                <td>$100.00</td>
                              </tr>
                              <tr>
                                <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                                <td class="text-black">$350.00</td>
                              </tr>
                              <tr>
                                <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
                              </tr>
                            </tbody>
                          </table>
        
                          <div class="border p-3 mb-3">
                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>
        
                            <div class="collapse" id="collapsebank">
                              <div class="py-2">
                                <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                              </div>
                            </div>
                          </div>
        
                          <div class="border p-3 mb-3">
                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>
        
                            <div class="collapse" id="collapsecheque">
                              <div class="py-2">
                                <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                              </div>
                            </div>
                          </div>
        
                          <div class="border p-3 mb-5">
                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>
        
                            <div class="collapse" id="collapsepaypal">
                              <div class="py-2">
                                <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                              </div>
                            </div>
                          </div>
        
                          <div class="form-group">
                            <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.html'">Place Order</button>
                          </div>
                          <div class="text-center fs-6" style="margin-top: 10px;">
                                    Check your order casr once again? <a href="obatPricing"> Back</a>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!-- </form> -->
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
