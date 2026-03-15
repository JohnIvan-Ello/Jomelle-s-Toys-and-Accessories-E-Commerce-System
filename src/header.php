<?php
include 'db_conn.php';

@session_start();


?>

<!-- navbar-->
      <header class="header" style="background-color: #FFC000	;">
        <div class="container px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.php"><span class="fw-bold text-uppercase" style="color: black;">Jomelle's Toy and Accessories</span>
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="companydetails.php">Company Details</a>
                </li>
                  <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.php">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.php">Category</a><a class="dropdown-item border-0 transition-link" href="detail.php">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.php">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.php">Checkout</a></div>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto">               
                <li class="nav-item"><a class="nav-link" href="cart.php"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal"></small></a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Profile</a></li>
                <?php if (!isset($_SESSION['user_id']) && !isset($_SESSION['UNAME'])): ?>
                <li class="nav-item"><a class="nav-link" href="login.php"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
                <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="logout.php"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Logout</a></li>
                <?php endif; ?>    
              </ul>
            </div>
          </nav>
        </div>
      </header>
      