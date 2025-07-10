<?php
use CodeIgniterCart\Cart;

// Grab total items in the cart
$cart       = new Cart();
$cartCount  = $cart->totalItems();

// Grab the 'q' value from the GET request
$request     = service('request');
$searchQuery = $request->getGet('q') ?? '';
?>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a class="logo d-flex align-items-center <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
        <img src="<?= base_url()?>logo/audioLogo.png" alt="">
        <span class="d-none d-lg-block" >Camplitude</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="get" action="<?= site_url('search') ?>">
        <input class="form-control" type="search" name="q" placeholder="Search Products" aria-label="Search" value="<?= esc($searchQuery) ?>"required>
        <button class="btn btn-outline-success" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"></span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              No new notifications
              <!--<a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>-->
            </li>
          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item">
          <a class="nav-link nav-icon<?php echo (uri_string() == 'keranjang') ? "" : " collapsed" ?>" href="/keranjang">
            <i class="bi bi-cart"></i>
              <?php if ($cartCount > 0): ?>
                <span class="badge bg-primary badge-number"><?= esc($cartCount) ?></span>
              <?php endif; ?>
          </a>
        </li><!-- End Cart Nav -->

        <?php
          $foto = session()->get('foto');
          $fotoPath = FCPATH . 'img/user/' . $foto;
        ?>
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?= base_url('img/user/'. $foto); 
            if (!file_exists($fotoPath)) {
              $foto = 'default.jpg';
            }?>" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= session()->get('username'); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= session()->get('username'); ?></h6>
              <span><?= session()->get('role'); ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/bantuan">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->