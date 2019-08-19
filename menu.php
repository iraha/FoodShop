<?php
  define("TITLE", "MENU | Hello company");
  include('includes/header.php');

 ?>

 <div id="food-menus" class="cf">
   <h1 align="center">Hello comapany's MENU</h1>
   <p align="center">イタリア修行で培った味と食材を存分に楽しめる</p>
   <hr>
   <ul>
   <?php foreach ($menuItems as $dish => $item) { ?>
     <a href="dish.php?item=<?php echo $dish; ?>"><font size="6"><?php echo $item[food]; ?></font>
       <p><font color="black"><?php echo $item[info]; ?></font></p>
       <img src="img/<?php echo $item[img]; ?>.jpg" alt="<?php echo $item[food]; ?>" width="400" height="300">
     </a>
     <br>
     <br>
   <?php } ?>
  <ul>
 </div>

<hr>

 <?php
   include('includes/footer.php');
 ?>
