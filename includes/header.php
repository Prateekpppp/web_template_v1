
      <!-- ========================= header-2 start ========================= -->
      <header class="header header-2">
        <div class="navbar-area">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo/logo.webp" width="70px" alt="Logo" />
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent2">
                    <ul id="nav2" class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="page-scroll <?= ($current_url == 'index.php' || $current_url == '')? 'active':'' ?>" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll <?= $current_url == 'products.php'? 'active':'' ?>" href="products.php">Products</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll <?= $current_url == 'contact.php'? 'active':'' ?>" href="contact.php">Contact</a>
                      </li>
                    </ul>
                    <a href="#0" class="button button-sm radius-10 d-none d-lg-flext">Get Started</a>
                  </div>
                  <!-- navbar collapse -->
                </nav>
                <!-- navbar -->
              </div>
            </div>
            <!-- row -->
          </div>
          <!-- container -->
        </div>
        <!-- navbar area -->
      </header>
      <!-- ========================= header-2 end ========================= -->
