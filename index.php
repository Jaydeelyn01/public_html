<?php if (isset($_SESSION['C_ID']))?>
<?php include('includes/connection.php');?>  
<!--header area-->
<?php include 'includes/header.php'; ?>
<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>
<!--header-->
  <div class="preloaderBg" id="preloader" onload="preloader()">
    <div class="preloader"></div>
    <div class="preloader2"></div>
  </div>
        <div class="card-header">
                <center><h3 class=""><a href="index.php">Boarding House</a></h3></center>
        </div>
<br>
<?php include 'includes/cakes.php'; ?>

    </div>
</div>

<!-- Live chat-->
<?php include 'livechat.php'; ?>
<!-- Live chat-->  
      <!--footer area-->
<?php include 'includes/footer.php'; ?>