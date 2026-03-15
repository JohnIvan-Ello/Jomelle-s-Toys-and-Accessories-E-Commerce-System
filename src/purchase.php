<?php
include 'db_conn.php';

@session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');
 };
if (isset($_SESSION['user_id']) && isset($_SESSION['UNAME'])) {}


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/customc.css">
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <?php include 'header.php'; ?>

      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4">Red digital smartwatch</h2>
                    <p class="text-muted">$250</p>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="cart.php">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">My Purchase</h1>
              </div>
              <div class="col-lg-6 text-lg-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Purchase</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <div class="container">
            <div class="row">
              <!-- SIDEBAR-->
              <div class="col-lg-3 position-relative">
                <div class="py-2 px-4 mb-3">
                <div class="circle-frame" id="profile-picture">
                  <span class="edit-text">Edit</span>
                  </div>
                </div>
                <div class="py-2 px-4 bg-dark text-white mb-3">
                    <strong class="small text-uppercase fw-bold">
                      <a href="user acc.php" class="nav-link">My Account</a>
                    </strong>
                </div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                    <br>
                    <li class="mb-2 active"><a class="reset-anchor" href="profile.php">Profile</a></li>
                    <br>
                    <li class="mb-2"><a class="reset-anchor" href="address.php">Address Book</a></li>
                    <br>
                    <li class="mb-2"><a class="reset-anchor" href="payment options.php">Payment Options</a></li>
                </ul>
                <div class="py-2 px-4 bg-dark text-white mb-3">
                    <strong class="small text-uppercase fw-bold">
                        <a href="purchase.php" class="nav-link">My Purhase</a>
                    </strong>
                </div>
              </div>

              <!-- HEADING-->
              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-sm text-muted mb-0">My Purchase</p>
                  </div>

                  <div class="col-lg-6">
                    <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                      <li class="list-inline-item">
                        <select class="selectpicker" data-customclass="form-control form-control-sm">
                          <option value>Sort By</option>
                          <option value="All">All</option>
                          <option value="To ship">To ship</option>
                          <option value="Completed">Completed</option>
                        </select>
                      </li>
                    </ul>
                  </div>
               
                  <?php
                  $ship_query = mysqli_query($conn, "SELECT * FROM `ship` WHERE user_id = '$user_id'") or die('query failed');
                  if(mysqli_num_rows($ship_query) > 0){
                    while($fetch_ship = mysqli_fetch_assoc($ship_query)){
              ?>
            <!-- CONTENT-->
            <div class="purchase-box">
                <div class="purchase-content">
                    <div class="purchase">
                      
                        <table class="purchase-table">
                            <tbody>

                                <tr>
                                  
                                    <td><img src=""></td>
                                    <td><?php echo $fetch_ship['products']; ?></td>
                                    <td>₱<?php echo $fetch_ship['price']; ?></td>
                                    <td><?php echo $fetch_ship['Company']; ?></td>
                                    <td>To Ship</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <?php
                    }
                  }
              ?>
            
                <!-- PAGINATION-->
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                 </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="bg-dark text-white" style="background-color: #FFC000;">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-3 mb-3 mb-md-0 text-center"> 
                    <ul class="list-unstyled mb-0">
                        <li>
                            <h3><a class="footer-link" href="companydetails.php" onclick="toggleInfo('aboutUs')">About Us</a></h3>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3 mb-md-0 text-center"> 
                    <ul class="list-unstyled mb-0">
                        <li>
                            <h3><a class="footer-link" href="companydetails.php" onclick="toggleInfo('contactUs')">Contact Us</a></h3>
                            <div id="contactUs" class="info" style="display: none;">
                                <form id="contactForm">
                                    <div class="form-group">
                                        <label for="name">Your Name:</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                    <!-- Other form fields -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3 mb-md-0 text-center"> 
                    <ul class="list-unstyled mb-0">
                        <li>
                            <h3><a class="footer-link" href="https://www.facebook.com/JomelleToys">Facebook</a></h3>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5 mb-md-0 text-center"> <!-- Adjusted the class -->
                    <ul class="list-unstyled mb-0">
                        <li>
                            <h3><a class="footer-link" href="#!" onclick="toggleInfo('terms')">Terms and Conditions</a></h3>
                            <div id="terms" class="info" style="display: none;">Read our terms and conditions.</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- HR with black color -->
        <hr style="border-color: black;">
        <div class="container text-center py-2">
            <p style="color: black;"><b><i>Jomelle's Toys and Accessories</i></b> &copy;</p>
        </div>
    </footer>
      <!-- JavaScript files-->
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/glightbox/js/glightbox.min.js"></script>
      <script src="vendor/nouislider/nouislider.min.js"></script>
      <script src="vendor/swiper/swiper-bundle.min.js"></script>
      <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
      <script src="js/front.js"></script>
      <!-- Nouislider Config-->
      <script>
        var range = document.getElementById('range');
        noUiSlider.create(range, {
            range: {
                'min': 0,
                'max': 2000
            },
            step: 5,
            start: [100, 1000],
            margin: 300,
            connect: true,
            direction: 'ltr',
            orientation: 'horizontal',
            behaviour: 'tap-drag',
            tooltips: true,
            format: {
              to: function ( value ) {
                return '$' + value;
              },
              from: function ( value ) {
                return value.replace('', '');
              }
            }
        });
        
      </script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
  </body>
</html>