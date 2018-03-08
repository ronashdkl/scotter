<!-- Breadcrumbs -->
      <section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <div class="d-sm-flex text-center">
            <div class="align-self-center">
              <h1 class="h3 mb-0">Your Orders</h1>
            </div>

            <div class="align-self-center ml-auto">
              <ul class="u-list-inline">
                <li class="list-inline-item g-mr-5">
                  <a class="u-link-v5 g-color-text" href="#!">Home</a>
                  <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
                </li>
                <li class="list-inline-item g-mr-5">
                  <a class="u-link-v5 g-color-text" href="#!">Pages</a>
                  <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
                </li>
                <li class="list-inline-item g-color-primary">
                  <span>Your Orders</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <div class="container g-pt-70 g-pb-30">
        <div class="row">
          <!-- Profile Settings -->
          <div class="col-lg-3 g-mb-50">
            <aside class="g-brd-around g-brd-gray-light-v4 rounded g-px-20 g-py-30">
              <!-- Profile Picture -->
              <div class="text-center g-pos-rel g-mb-30">
                <div class="g-width-100 g-height-100 mx-auto mb-3">
                  <img class="img-fluid rounded-circle" src="<?= yii\helpers\Url::toRoute('/')?>frontAssets/img-temp/100x100/img1.jpg" alt="Image Decor">
                </div>

                <span class="d-block g-font-weight-500">James Collins</span>

                <span class="u-icon-v3 u-icon-size--xs g-color-white--hover g-bg-primary--hover rounded-circle g-pos-abs g-top-0 g-right-15 g-cursor-pointer" title="Change Profile Picture"
                      data-toggle="tooltip"
                      data-placement="top">
                  <i class="icon-finance-067 u-line-icon-pro"></i>
                </span>
              </div>
              <!-- End Profile Picture -->

              <hr class="g-brd-gray-light-v4 g-my-30">

              <!-- Profile Settings List -->
              <ul class="list-unstyled mb-0"> 
                <li class="g-py-3">
                  <a class="d-block align-middle active u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover g-color-primary--parent-active g-bg-gray-light-v5--active rounded g-pa-3" href="page-orders-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-114 u-line-icon-pro"></i></span>
                    Your Orders
                  </a>
                </li> 
                <li class="g-py-3">
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-login-security-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-finance-135 u-line-icon-pro"></i></span>
                    Login &amp; Security
                  </a>
                </li>
                <li class="g-pt-3">
                  <a class="d-block align-middle u-link-v5 g-color-text g-color-primary--hover g-bg-gray-light-v5--hover rounded g-pa-3" href="page-notifications-1.html">
                    <span class="u-icon-v1 g-color-gray-dark-v5 mr-2"><i class="icon-education-033 u-line-icon-pro"></i></span>
                    Notifications
                  </a>
                </li>
              </ul>
              <!-- End Profile Settings List -->
            </aside>
          </div>
          <!-- End Profile Settings -->

          <!-- Orders -->
          <div class="col-lg-9 g-mb-50">
            <div class="row justify-content-end g-mb-20 g-mb-0--md">
              <div class="col-md-7 g-mb-30">
                <!-- Search Form -->
                <form class="input-group g-pos-rel">
                  <span class="g-pos-abs g-top-0 g-left-0 g-z-index-3 g-px-13 g-py-10">
                    <i class="g-color-gray-dark-v4 g-font-size-12 icon-education-045 u-line-icon-pro"></i>
                  </span>
                  <input class="form-control u-form-control g-brd-around g-brd-gray-light-v3 g-brd-primary--focus g-font-size-13 g-rounded-left-5 g-pl-35 g-pa-0" type="search" placeholder="Search all orders">
                  <div class="input-group-append g-brd-none g-py-0">
                    <button class="btn u-btn-black g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Search Orders</button>
                  </div>
                </form>
                <!-- End Search Form -->
              </div>
            </div> 
            <!-- End Links -->

            <div class="mb-5">
              <h3 class="h6 d-inline-block">2 orders <span class="g-color-gray-dark-v4 g-font-weight-400">placed in</span></h3>

              <!-- Secondary Button -->
              <div class="d-inline-block btn-group u-shadow-v19 ml-2">
                <button type="button" class="btn u-btn-black dropdown-toggle h6 align-middle g-brd-none g-color-black g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-weight-300 g-font-size-12 g-py-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  past 6 months
                </button>
                <div class="dropdown-menu rounded-0 g-font-size-12">
                  <a class="dropdown-item g-color-black g-font-weight-300" href="#!">last 30 days</a>
                  <a class="dropdown-item g-color-black g-bg-gray-light-v5 g-font-weight-300" href="#!">past 6 months</a>
                  <a class="dropdown-item g-color-black g-font-weight-300" href="#!">2017</a>
                  <a class="dropdown-item g-color-black g-font-weight-300" href="#!">2016</a>
                </div>
              </div>
              <!-- End Secondary Button -->
            </div>

            <!-- Order Block -->
            <div class="g-brd-around g-brd-gray-light-v4 rounded g-mb-30">
              <header class="g-bg-gray-light-v5 g-pa-20">
                <div class="row">
                  <div class="col-sm-3 col-md-2 g-mb-20 g-mb-0--sm">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Order Placed</h4>
                    <span class="g-color-black g-font-weight-300 g-font-size-13">July 31, 2017</span>
                  </div>

                  <div class="col-sm-3 col-md-2 g-mb-20 g-mb-0--sm">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Total</h4>
                    <span class="g-color-black g-font-weight-300 g-font-size-13">$379.00</span>
                  </div>

                  <div class="col-sm-3 col-md-2 g-mb-20 g-mb-0--sm">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Ship to</h4>
                    <span class="g-color-black g-font-weight-300 g-font-size-13">James Collins</span>
                  </div>

                  <div class="col-sm-3 col-md-4 ml-auto text-sm-right">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Order # 278-841024961890</h4>
                    <a class="g-font-weight-300 g-font-size-13" href="#!">Invoice</a>
                  </div>
                </div>
              </header>

              <!-- Order Content -->
              <div class="g-pa-20">
                <div class="row">
                  <div class="col-md-8">
                    <div class="mb-4">
                      <h3 class="h5 mb-1">Delivered Yesterday</h3>
                      <p class="g-color-gray-dark-v4 g-font-size-13">Your package was delivered per the instructions.</p>
                    </div>

                    <div class="row">
                      <div class="col-4 col-sm-3 g-mb-30">
                        <img class="img-fluid" src="assets/img-temp/150x150/img9.jpg" alt="Image Description">
                      </div>

                      <div class="col-8 col-sm-9 g-mb-30">
                        <h4 class="h6 g-font-weight-400"><a href="#!">Wacom Intuos Pro digital graphic clock for Mac or PC, Medium, (PTH660) NEW MODEL</a></h4>
                        <span class="d-block g-color-gray-dark-v4 g-font-size-13 mb-2">Sold by: Unify.com LLC</span>
                        <span class="d-block g-color-lightred mb-2">$364.80</span>
                        <a class="btn g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-13 rounded g-px-18 g-py-7" href="#!">Buy it Again</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <a class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25 mb-4" href="#!">Track Package</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Return Item</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Leave Package Feedback</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Write a Product Review</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Archive Order</a>
                  </div>
                </div>
              </div>
              <!-- End Order Content -->
            </div>
            <!-- End Order Block -->

            <!-- Order Block -->
            <div class="g-brd-around g-brd-gray-light-v4 rounded">
              <header class="g-bg-gray-light-v5 g-pa-20">
                <div class="row">
                  <div class="col-sm-3 col-md-2 g-mb-20 g-mb-0--sm">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Order Placed</h4>
                    <span class="g-color-black g-font-weight-300 g-font-size-13">May 29, 2017</span>
                  </div>

                  <div class="col-sm-3 col-md-2 g-mb-20 g-mb-0--sm">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Total</h4>
                    <span class="g-color-black g-font-weight-300 g-font-size-13">$132.00</span>
                  </div>

                  <div class="col-sm-3 col-md-2 g-mb-20 g-mb-0--sm">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Ship to</h4>
                    <span class="g-color-black g-font-weight-300 g-font-size-13">James Collins</span>
                  </div>

                  <div class="col-sm-3 col-md-4 ml-auto text-sm-right">
                    <h4 class="g-color-gray-dark-v4 g-font-weight-400 g-font-size-12 text-uppercase g-mb-2">Order # 541-296184168196</h4>
                    <a class="g-font-weight-300 g-font-size-13" href="#!">Invoice</a>
                  </div>
                </div>
              </header>

              <!-- Order Content -->
              <div class="g-pa-20">
                <div class="row">
                  <div class="col-md-8">
                    <div class="mb-4">
                      <h3 class="h5 mb-1">Delivered May 29, 2017</h3>
                      <p class="g-color-gray-dark-v4 g-font-size-13">Your package was delivered per the instructions.</p>
                    </div>

                    <div class="row">
                      <div class="col-4 col-sm-3 g-mb-30">
                        <img class="img-fluid" src="assets/img-temp/150x150/img3.jpg" alt="Image Description">
                      </div>

                      <div class="col-8 col-sm-9 g-mb-30">
                        <h4 class="h6 g-font-weight-400"><a href="#!">To Boot New York Men's Dodd Oxford, Parmadoc Tan, 7 M US</a></h4>
                        <span class="d-block g-color-gray-dark-v4 g-font-size-13 mb-2">Sold by: Unify.com LLC</span>
                        <span class="d-block g-color-lightred mb-2">$125.00</span>
                        <a class="btn g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-13 rounded g-px-18 g-py-7" href="#!">Buy it Again</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <a class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25 mb-4" href="#!">Track Package</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Return Item</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Leave Package Feedback</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Write a Product Review</a>
                    <a class="btn btn-block g-brd-around g-brd-gray-light-v3 g-color-gray-dark-v3 g-bg-gray-light-v5 g-bg-gray-light-v4--hover g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">Archive Order</a>
                  </div>
                </div>
              </div>
              <!-- End Order Content -->
            </div>
            <!-- End Order Block -->

            <!-- Pagination -->
            <nav class="g-mt-100" aria-label="Page Navigation">
              <ul class="list-inline mb-0">
                <li class="list-inline-item hidden-down">
                  <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded-circle g-pa-5" href="#!">1</a>
                </li>
                <li class="list-inline-item hidden-down">
                  <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">2</a>
                </li>
                <li class="list-inline-item">
                  <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5 g-ml-15" href="#!" aria-label="Next">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
                <li class="list-inline-item float-right">
                  <span class="u-pagination-v1__item-info g-color-gray-dark-v4 g-font-size-12 g-pa-5">Page 1 of 2</span>
                </li>
              </ul>
            </nav>
            <!-- End Pagination -->
          </div>
          <!-- Orders -->
        </div>
      </div>

      