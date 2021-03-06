	<!-- Navbar: Default-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar-wrapper navbar-sticky">
      <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="index.html"><img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/logo/logo-dark.png")?>" alt="CreateX"/></a></div>
      <div class="d-table-cell w-100 align-middle pl-md-3">
        <div class="navbar-top d-none d-lg-flex justify-content-between align-items-center">
          <div><a class="navbar-link mr-3" href="tel:+1212477690000"><i class="fe-icon-phone"></i>+1 (212) 477 690 000</a><a class="navbar-link mr-3" href="mailto:support@example.com"><i class="fe-icon-mail"></i>support@example.com</a><a class="social-btn sb-style-3 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a><a class="social-btn sb-style-3 sb-instagram" href="#"><i class="socicon-instagram"></i></a></div>
          <div>
            <ul class="list-inline mb-0">
              <li class="dropdown-toggle"><a class="navbar-link" href="account-login.html"><i class="fe-icon-user"></i>Login or Create account</a>
                <div class="dropdown-menu right-aligned p-3 text-center" style="min-width: 200px;">
                  <p class="text-sm opacity-70">Sign in to your account or register new one to have full control over your orders, receive bonuses and more.</p><a class="btn btn-primary btn-sm btn-block" href="account-login.html">Sign In</a>
                  <p class="text-sm text-muted mt-3 mb-0">New customer? <a href='account-login.html'>Register</a></p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="navbar justify-content-end justify-content-lg-between">
          <!-- Search-->
          <form class="search-box" method="get">
            <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
          </form>
          <!-- Main Menu-->
          <ul class="navbar-nav d-none d-lg-block">
            <!-- Home-->
            <li class="nav-item"><a class="nav-link" href="components.html">Home</a></li>
			<!-- Portfolio-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="portfolio-style1-boxed.html">Portfolio</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item has-children"><a href="portfolio-style1-boxed.html">Style 1 Grid</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="portfolio-style1-boxed.html">Style 1 Boxed Layout</a></li>
                    <li class="dropdown-item"><a href="portfolio-style1-fw.html">Style 1 Full Width Layout</a></li>
                  </ul>
                </li>
                <li class="dropdown-item has-children"><a href="portfolio-style2-boxed.html">Style 2 Grid</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="portfolio-style2-boxed.html">Style 2 Boxed Layout</a></li>
                    <li class="dropdown-item"><a href="portfolio-style2-fw.html">Style 2 Full Width Layout</a></li>
                  </ul>
                </li>
                <li class="dropdown-item"><a href="portfolio-list.html">List View</a></li>
                <li class="dropdown-item has-children"><a href="portfolio-single-side-gallery-grid.html">Single Project</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="portfolio-single-side-gallery-grid.html">Side Gallery Grid</a></li>
                    <li class="dropdown-item"><a href="portfolio-single-side-gallery-list.html">Side Gallery List</a></li>
                    <li class="dropdown-item"><a href="portfolio-single-wide-slider.html">Wide Slider</a></li>
                    <li class="dropdown-item"><a href="portfolio-single-wide-gallery.html">Wide Gallery</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- Shop-->
            <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="shop-boxed-ls.html">Shop</a>
              <div class="dropdown-menu mega-dropdown">
                <div class="d-flex">
                  <div class="column">
                    <div class="widget widget-custom-menu">
                      <h4 class="widget-title">Shop Layouts</h4>
                      <ul>
                        <li><a href="shop-boxed-ls.html">Boxed Left Sidebar</a></li>
                        <li><a href="shop-boxed-rs.html">Boxed Right Sidebar</a></li>
                        <li><a href="shop-boxed-ft.html">Boxed Filters Top</a></li>
                        <li><a href="shop-boxed-ns.html">Boxed No Sidebar</a></li>
                        <li><a href="shop-fw-ls.html">Full Width Left Sidebar</a></li>
                        <li><a href="shop-fw-rs.html">Full Width Right Sidebar</a></li>
                        <li><a href="shop-fw-ft.html">Full Width Filters Top</a></li>
                        <li><a href="shop-fw-ns.html">Full Width No Sidebar</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="column">
                    <div class="widget widget-custom-menu">
                      <h4 class="widget-title">Shop Pages</h4>
                      <ul>
                        <li><a href="shop-categories.html">Shop Categories</a></li>
                        <li><a href="shop-single.html">Product Page</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout-address.html">Checkout - Address</a></li>
                        <li><a href="checkout-shipping.html">Checkout - Shipping</a></li>
                        <li><a href="checkout-payment.html">Checkout - Payment</a></li>
                        <li><a href="checkout-review.html">Checkout - Review</a></li>
                        <li><a href="checkout-complete.html">Checkout - Complete</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="column p-0 mr-0 ml-3" style="width: 320px;"><a class="d-block" href="shop-single.html"><img src="img/shop/mega-menu.jpg" alt="Samsung Galaxy S9"/></a></div>
                </div>
              </div>
            </li>
            <!-- Account-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="account-orders.html">Account</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="account-login.html">Login / Register</a></li>
                <li class="dropdown-item"><a href="account-password-recovery.html">Password Recovery</a></li>
                <li class="dropdown-item"><a href="account-orders.html">Orders List</a></li>
                <li class="dropdown-item"><a href="account-profile.html">Profile Settings</a></li>
                <li class="dropdown-item"><a href="account-address.html">Contact / Shipping Address</a></li>
                <li class="dropdown-item"><a href="account-wishlist.html">Wishlist</a></li>
                <li class="dropdown-item"><a href="account-tickets.html">My Tickets</a></li>
                <li class="dropdown-item"><a href="account-single-ticket.html">Single Ticket</a></li>
              </ul>
            </li>
            <!-- Pages-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">Pages</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item has-children"><a href="about-us-v1.html">About Us</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="about-us-v1.html">About Us v.1</a></li>
                    <li class="dropdown-item"><a href="about-us-v2.html">About Us v.2</a></li>
                  </ul>
                </li>
                <li class="dropdown-item has-children"><a href="contacts-v1.html">Contacts</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="contacts-v1.html">Contacts v.1</a></li>
                    <li class="dropdown-item"><a href="contacts-v2.html">Contacts v.2</a></li>
                  </ul>
                </li>
                <li class="dropdown-item has-children"><a href="help-topics.html">Help Center</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="help-topics.html">Help Topics</a></li>
                    <li class="dropdown-item"><a href="help-single-topic.html">Single Topic</a></li>
                    <li class="dropdown-item"><a href="help-submit-request.html">Submit a Request</a></li>
                  </ul>
                </li>
                <li class="dropdown-item has-children"><a href="services.html">Services</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="services.html">Services Landing</a></li>
                    <li class="dropdown-item"><a href="services-single.html">Single Service Page</a></li>
                  </ul>
                </li>
                <li class="dropdown-item"><a href="pricing.html">Pricing</a></li>
                <li class="dropdown-item"><a href="product-comparison.html">Product Comparison</a></li>
                <li class="dropdown-item"><a href="order-tracking.html">Order Tracking</a></li>
                <li class="dropdown-item"><a href="search-results.html">Search Results</a></li>
                <li class="dropdown-item has-children"><a href="coming-soon-light.html">Coming Soon</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="coming-soon-light.html">Coming Soon Light</a></li>
                    <li class="dropdown-item"><a href="coming-soon-dark.html">Coming Soon Dark</a></li>
                  </ul>
                </li>
                <li class="dropdown-item"><a href="404.html">404 Not Found</a></li>
                <li class="dropdown-item"><a class="text-accent" href="docs/dev-setup.html"><i class="d-inline-block fe-icon-file-text align-middle mr-1"></i>Documentation</a></li>
              </ul>
            </li>
            <!-- Components-->
            <li class="nav-item"><a class="nav-link" href="components.html">Components</a></li>
          </ul>
          <div>
            <ul class="navbar-buttons d-inline-block align-middle mr-lg-2">
              <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
              <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
              <li><a href="#shopping-cart" data-toggle="offcanvas"><i class="fe-icon-shopping-cart"></i></a><span class="badge badge-danger">3</span></li>
            </ul><a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="https://themes.getbootstrap.com/product/createx-multipurpose-template-ui-kit/" target="_blank">Buy Now</a>
          </div>
        </div>
      </div>
    </header>