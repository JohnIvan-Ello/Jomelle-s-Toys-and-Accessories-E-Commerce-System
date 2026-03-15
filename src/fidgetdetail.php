<?php
include 'db_conn.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['add_to_cart'])){

  $product_name = $_POST['product_name'];
  $product_id = $_POST['product_id'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = $_POST['product_quantity'];

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE productid = '$product_id' AND user_id = '$user_id'");

  if(mysqli_num_rows($select_cart) > 0){
    $message[] = 'product already added to cart!';

  }else{
     mysqli_query($conn, "INSERT INTO `cart`(productid, name, price, image, quantity ,user_id) VALUES('$product_id' ,'$product_name', '$product_price', '$product_image', '$product_quantity', '$user_id')") or die('query failed');
     $message[] = 'product added to cart!';
     header("Location: cart.php");


  }

}; 
?>


<!DOCTYPE html>
<html>
  <head>
  <style>


</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jomelle's Toy and Accessories</title>
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

  </head>

<?php
include 'prompt.php'; 
?>
  <body>
    <div class="page-holder">
    <?php include 'header.php'; ?>

      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(img/fg2.jpg)" href="img/fg2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/fg2-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/fg2-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
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
                    <p class="text-muted">₱25</p>
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
      <section class="py-5">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-6">
              <!-- PRODUCT SLIDER-->
              <div class="row m-sm-0">
                <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
                  <div class="swiper product-slider-thumbs">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="img/fg2.jpg" alt="..."></div>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="img/fg6.jpg" alt="..."></div>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="img/fg5.jpg" alt="..."></div>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="img/fg4.jpg" alt="..."></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-10 order-1 order-sm-2">
                  <div class="swiper product-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide h-auto"><a class="glightbox product-view" href="img/fg5.jpg" data-gallery="gallery2" data-glightbox="Product item 1"><img class="img-fluid" src="img/fg2.jpg" alt="..."></a></div>
                      <div class="swiper-slide h-auto"><a class="glightbox product-view" href="img/fg6.jpg" data-gallery="gallery2" data-glightbox="Product item 2"><img class="img-fluid" src="img/fg6.jpg" alt="..."></a></div>
                      <div class="swiper-slide h-auto"><a class="glightbox product-view" href="img/fg5.jpg" data-gallery="gallery2" data-glightbox="Product item 3"><img class="img-fluid" src="img/fg5.jpg" alt="..."></a></div>
                      <div class="swiper-slide h-auto"><a class="glightbox product-view" href="img/fg4.jpg" data-gallery="gallery2" data-glightbox="Product item 4"><img class="img-fluid" src="img/fg4.jpg" alt="..."></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- PRODUCT DETAILS-->
            <div class="col-lg-6">
              <ul class="list-inline mb-2 text-sm">
                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
              </ul>
              <form method = "post" action="">
                
              <h1>Fidget Spinner</h1>
              <p class="text-muted lead">₱25</p>
              <p class="text-sm mb-4"> Introducing our sleek and stylish fidget spinner, the perfect companion for moments of focus and relaxation. Crafted with precision and durability in mind, our spinner boasts smooth spins and a satisfying weight that will keep your hands engaged and your mind calm. Say goodbye to restless energy and hello to enhanced concentration with our premium fidget spinner.</p>
              <div class="row align-items-stretch mb-4">
                <div class="col-sm-5 pr-sm-0">
                <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products` where id = '1'");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>
                  <input type="hidden" name="product_id" value ='1'>
                  <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                  </form>
                  <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                  
                    <div class="quantity">
                      <input class="form-control border-0 shadow-0 p-0" type="number" min="0" value="1"  max = "<?php echo $fetch_product['quantity']; ?>" name = "product_quantity">
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 pl-sm-0">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0"></div>

              </div><a class="text-dark p-0 mb-4 d-inline-block" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a><br>
              <ul class="list-unstyled small d-inline-block">
                <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ms-2" href="novelty.php">Novelty Toys</a></li>
              </ul>
            </div>
          </div>

<?php
         };
      };
      ?>
                  
          <!-- DETAILS TABS-->
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link text-uppercase active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a></li>
          </ul>
          <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="p-4 p-lg-5 bg-white">
                <h6 class="text-uppercase">Product description </h6>
                <p class="text-muted text-sm mb-0">Introducing our sleek and stylish fidget spinner, the perfect companion for moments of focus and relaxation. Crafted with precision and durability in mind, our spinner boasts smooth spins and a satisfying weight that will keep your hands engaged and your mind calm. Say goodbye to restless energy and hello to enhanced concentration with our premium fidget spinner.</p>
              </div>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
              <div class="p-4 p-lg-5 bg-white">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="d-flex mb-3">
                      <div class="flex-shrink-0"><img class="rounded-circle" src="img/customer-1.png" alt="" width="50"/></div>
                      <div class="ms-3 flex-shrink-1">
                        <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                        <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                        <ul class="list-inline mb-1 text-xs">
                          <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                        </ul>
                        <p class="text-sm mb-0 text-muted">Lorem ipsum dolor sit amet.</p>
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="flex-shrink-0"><img class="rounded-circle" src="img/customer-2.png" alt="" width="50"/></div>
                      <div class="ms-3 flex-shrink-1">
                        <h6 class="mb-0 text-uppercase">Jane Doe</h6>
                        <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                        <ul class="list-inline mb-1 text-xs">
                          <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                        </ul>
                        <p class="text-sm mb-0 text-muted">Lorem ipsum dolor sit amet.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
      </section>
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