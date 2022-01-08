<?php require_once "controller.php"; ?>
<!--header -->
<?php require('repetative/Main_header.php') ?>

<?php require('repetative/access.php')?>
  <!-- main-body Section  -->
  <section id="main-body">
    <div class="main-body container">
      <div>
        <h2> <?php echo $fetch_info['FirstName'] ?> <?php echo $fetch_info['LastName'] ?> Welcome to RECO a lost and found system <br>
          This is a system that helps in solving the problem of Lost or Stolen item by connecting the owner or the finder of a product to the respective individual.
        </h2>
        <a href="Mainfinderspage.php" type="button" class="cta">Found Items</a>
        <a href="MainLostpage.php" type="button" class="cta">Lost Items</a>
      </div>
    </div>
  </section>
  <!-- End main-body Section  -->
