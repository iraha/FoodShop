<?php
  define("TITLE", "Team | Hello company");
  include('includes/header.php');

 ?>

  <div id="team-members" class="cf">
    <h1 align=center>Our Team at Hello company</h1>
    <p align=center>私たちはお客様と共に成長し、居心地の良い空間と
    <strong><font color="red"><br>お客様にとってベストの食を提供します<br></font></strong></p>

    <hr>

    <?php
      foreach ($teamMembers as $member) {
    ?>
      <div class="member">

        <img src="img/<?php echo $member[img]; ?>.jpg" alt="<?php echo $member[name]; ?>">
        <h2><?php echo $member[name]; ?></h2>
        <p><?php echo $member[bio]; ?></p>

      </div><!-- member -->
    <?php
      }
    ?>
  </div>

  <hr>

 <?php include('includes/footer.php'); ?>
