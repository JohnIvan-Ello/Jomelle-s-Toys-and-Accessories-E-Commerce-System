
<?php

   include 'db_conn.php';
   session_start();
   $user_id = $_SESSION['user_id'];

   if(!isset($user_id)){
      header('location:login.php');
   };
   $ship_id = $_COOKIE["ship_id"]; 
 
   ?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Invoice Template Design</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<section>
  <div class="invoice">
    <div class="header">
      <div class="i_row">
        <div class="i_logo">
          <p>Coding Market</p>
        </div>
        <div class="i_title">
          <h2>INVOICE</h2>
          <p class="p_title text_right">
            April 20, 2023
          </p>
        </div>
      </div>
      <div class="i_row">
        <div class="i_number">
          <p class="p_title">INVOICE NO: <?php echo $_COOKIE['ship_id']; ?></p>
        </div>
        <div class="i_address text_right">
          <p>TO</p>
          <p class="p_title">
            Facebook <br />
            <span>Menlo Park, California</span><br />
            <span>United States</span>
          </p>
        </div>
      </div>
    </div>
    <div class="body">
      <div class="i_table">
        <div class="i_table_head">
          <div class="i_row">
            <div class="i_col w_55">
              <p class="p_title">DESCRIPTION</p>
            </div>
            <div class="i_col w_15">
              <p class="p_title">PRICE</p>
            </div>

          </div>
        </div>
        <?php
      $cart_query = mysqli_query($conn, "SELECT * FROM `ship` WHERE id = '$ship_id'") or die('query failed');
      $grand_total = 0;
      if(mysqli_num_rows($cart_query) > 0){
         while($fetch_cart = mysqli_fetch_assoc($cart_query)){
   ?>
        <div class="i_table_body">
          <div class="i_row">
            <div class="i_col w_55">
              <p><?php echo $fetch_cart['name']; ?></p>
            </div>
            <div class="i_col w_15">
              <p>₱<?php echo $fetch_cart['price']; ?>   </p>
            </div>
</div>

      </tr>
   <?php



         }
      }else{
         echo '<tr><td style="padding:10px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
      }
   ?>

        <div class="i_table_foot">
          <div class="i_row">
            <div class="i_col w_15">
              <p></p>
            </div>
            <div class="i_col w_55">
              <p></p>
            </div>
          </div>
          <div class="i_row grand_total_wrap">
            <div class="i_col w_50">
            </div>
            <div class="i_col w_50 grand_total">
              <p><span>GRAND TOTAL:</span>
                <span>₱<?php echo $grand_total?></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">

      </div>
    </div>
  </div>
</section>

</body>
</html>