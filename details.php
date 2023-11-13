<!--dito dapat magdidisplay yung prod_pic1, prod_pic2, prod_pic3, na nasa upload image-->
<?php include('includes/connection.php');?>  
<!--header area-->
<?php include 'includes/header.php'; ?>
<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/script.php'; ?>
<!-- Live chat-->
<?php include 'livechat.php'; ?>
<!-- Live chat-->  
<center>
<div class="card-header">
<h3 class=""><a href="announce.php">Boarding House</a></h3></center>
</div>
        <br>
        
            <a class="btn btn-secondary btn-round" type="button" class="btn btn-lg btn-warning fas fa-pen" href="index.php"><i class="fas fa-arrow-left"></i></a>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-8">
         

<?php
    include('includes/connection.php');
    $product_id=$_GET['product_id'];
    $query = "SELECT * FROM tblproducts WHERE product_id='$product_id'";
    $result = mysqli_query($db,$query);
    while($res = mysqli_fetch_array($result)) {  
        //getting product id
        
    
?>   
<br>
    <div class="row justify-content-center">
    <div class="section" id="carousel">
        <div class="container"> 
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">

                     
                           
                            <img src="admin/images/defaults.png" width="400px">
                           
                            <div class="carousel-caption d-none d-md-block">
                                <h3><?php echo $res['product_name']; ?></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                        
            
                            <img width="400px" src="admin/images/default.png">
                          
                            <div class="carousel-caption d-none d-md-block">
                                <h3><?php echo $res['product_name']; ?></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                          
                 
                          
                            <img width="400px" src="admin/images/default.png">
                            
                            <div class="carousel-caption d-none d-md-block">
                                <h3><?php echo $res['product_name']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                    </a>
                    </div>
                </div>
        </div>

        <h5><br><br>
        <ul class="text-secondary"><b><i class="fas fa-fw fa-home"></i>Boarding House name: </b>
        <span style="color:green;"><?php echo $res['product_name']; ?><img src="images/check.png" alt="Verified" width="20" height="20"></span>
        </ul>   
        <ul class="text-secondary"><b><i class="fas fa-map"></i> Address: </b>
        <span style="color:green;"><?php echo $res['address']; ?></span>
        </ul>  
        <ul class="text-secondary"><b><i class="fas fa-fw fa-user"></i>Name of owner: </b> 
        <span style="color:green;"><?php echo $res['name']; ?></span>
        </ul> 
        <ul class="text-secondary"><b><i class="fas fa-fw fa-phone"></i>Contact number: </b> 
        <span style="color:green;"><?php echo $res['contact']; ?></span>
        </ul> 
        <ul class="text-secondary"><b><i class="fas fa-fw fa-envelope"></i>Email: </b> 
        <span style="color:green;"><?php echo $res['email']; ?></span>
        </ul> 
        <ul class="text-secondary"><b><i class="fas fa-fw fa-file"></i>Description: </b>
        <span style="color:green;"><p align="justify"><?php echo $res['description']; ?></p></span>
        </ul>
        <ul class="text-secondary"><b><i class="fas fa-fw fa-money"></i>Price: </b>
        <span style="color:green;"><?php echo 'Php'.$res['price'].'  per month'; ?></span>
        </ul>
        <ul class="text-secondary">
       <b><i class="fas fa-fw fa-bed"></i>Available beds: </b><span style="color:green;"><?php echo $res['quantity'];?></span>
       </ul></h5>
        <?php }?>
        </div>
        </div>
                            </div>
<?php include 'reviews.php'; ?>
<?php include 'includes/footer.php'; ?>