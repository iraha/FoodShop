<?php
  define("TITLE", "Menu | Hello company");

  include('includes/header.php');

  function strip_bad_chars( $input ) {
    $output = preg_replace( "/[^a-zA-Z0-9-]/", "", $input );
    return $output;
  }

  if (isset($_GET['item'])) {
    $menuItem = strip_bad_chars( $_GET['item'] );
    $dish = $menuItems[$menuItem];
  }
 ?>

  <hr>
  <div id="dish">

    <h1><?php echo $dish[food]; ?> Price <?php echo $dish[price]; ?></h1>
    <p><?php echo $dish[info]; ?></p>
    <p><?php echo $dish[detail]; ?></p>
    <img src="img/<?php echo $dish[img]; ?>.jpg" alt="<?php echo $dish[food]; ?> " width="450" height="330">
  </div><!-- dish -->

  <hr>

  <a href="menu.php" class="button previous">&laquo; Back to Menu</a>

<?php include('includes/footer.php'); ?>
