  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->
    
    <!--
      <li class="nav-item">
        <a class="nav-link <php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
          <i class="bi bi-cart-check"></i>
          <span>Keranjang</span>
        </a>
      </li>
    Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'profile') ? "" : "collapsed" ?>" href="/profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Nav -->

      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'faq') ? "" : "collapsed" ?>" href="/bantuan">
          <i class="bi bi-question-circle"></i>
          <span>Bantuan</span>
        </a>
      </li><!-- End Bantuan Nav -->

      <?php
        if (session()->get('role') == 'admin') {
        ?>
      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="/produk">
          <i class="bi bi-receipt"></i>
          <span>Produk</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'transaksi') ? "" : "collapsed" ?>" href="/transaksi">
          <i class="bi bi-journal-text"></i>
          <span>Transaksi</span>
        </a>
      </li><!-- End Transaksi Nav -->

      <?php
        }
        ?>
    </ul>

  </aside><!-- End Sidebar-->