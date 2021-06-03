
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <!--==== CSS =====-->

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.min.css'); ?>">

    <!-- Font-awesome css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/all.css'); ?>">
    <!-- Owl-carousel css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/owl.carousel.min.css'); ?>">
    
    <!-- My css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <!-- jQuery min js -->
    <script type="text/javascript" src="<?= base_url('tool/js/jquery-3.2.1.slim.min.js'); ?>"></script>
    
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>">

    <title>BookHut</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('tool/img/favicon.png'); ?>">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light pr-lg-5 ">
  <a class="navbar-brand" href="<?= base_url('home'); ?>"><div class="lname"><img src="<?= base_url('tool/img/favicon.png')?>" width="32" height="32" alt=""> <span>Book</span>Hut</div></a>
    <a href="<?= base_url()?>cart" class="ml-auto"><i class="fa fa-shopping-cart moving-cart" aria-hidden="true"></i></a>
    
                        <!--=== cart item count ===-->
                        <?php if($this->cart->contents()): ?>
                        <div class="cart-count">
                            <div><?php $rows = count($this->cart->contents());
                            print $rows; ?></div>
                        </div>
                        <?php endif; ?>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    
 
    
    </ul>
    
        <div class="admin-search search">
                  <?= form_open('users/search', ['id'=>'user-search'])?>
                            <input type="text" name="search_book" class="form-control" placeholder="Search any book">
                            <button type="submit"><i class="fas fa-search"></i></button>
                      <?= form_close()?>

                      </div>

                          <div class="">
                    <?php if($this->session->userdata('logged_in') == FALSE): ?>
                        
                        <a href="<?= base_url()?>users/login" class="btn-login"><i class="fas fa-sign-in-alt"></i> Sign In/Sign Up</a>
                 
                    <?php else: ?>
              
                    <?php endif; ?>
  
        
                             <!-- #For admin button  -->
                        <?php if($this->session->userdata('type') == 'A'): ?>
                            <li class="btn"><a class="colr" href="<?= base_url()?>admin"><i class="fas fa-tools"></i> Admin panel</a></li>
                        <?php endif; ?>
                        
                        <!-- #For user account button  -->
                        <?php $type = $this->session->userdata('type') ?>
                            <?php if($type == 'U'): ?>
                            <li class="btn "><a class="colr" href="<?= base_url()?>user-home"><i class="far fa-user"></i> Welcome, <?php print $this->session->userdata('name') ?>
                        </a></li>
                        <?php endif; ?>
                    </div>

  </div>
</nav>


<!--========== Menu Area =========-->
<div>
    <?php $this->load->view('temp/menu'); ?>
</div>
</div>
<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('login_success'))
    {
	 print '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <div class = "container">'.$this->session->flashdata('login_success').'</div>
<img src="close.soon" style="display:none;" onerror="(function(el){ setTimeout(function(){ $(el).parent().remove(); },4000 ); })(this);" />
</div>';
    }
?>

<!--============ Slider Area ===========-->
<div>
    <?php $this->load->view('temp/slider'); ?>
</div>
<!--==== Recent Books ====-->
<div class="section-padding after-slider">
    <div class="container">
        <div class="section-title"><a href="<?= base_url()?>users/all-books">recent Books</a></div>
        <div><?php $this->load->view('temp/recent_books') ?></div> 
    </div>   
</div>
<!--==== CSE Books ====-->
<div class="section-padding">
    <div class="container">
        <div class="section-title"><a href="<?= base_url()?>users/all-books/?ctg=CSE">Programming Books</a></div>
        <div><?php $this->load->view('temp/cse_books') ?></div> 
    </div>   
</div>

<!--============ Footer Area ============-->
<div class="footer-area-home">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <div class="brand-name">
                        <div class="lname"><a href=""><span>Book</span>Hut</a></div>
                        <p>This is a online books market place, it allows you to sell & buy your favourite books.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3>Our Services</h3>

                    <ul>
                        <li><a href="<?= base_url('users/all_books')?>">Buy Books</a></li>
                      
                        <li><a href="<?= base_url('user_home/sell_books')?>">Sell your books</a></li>
                        <li><a href="<?= base_url('users/terms')?>">Terms and conditions</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3>Stay connected</h3>
                    <p>Communication is very much important for building good customer relationship. You can connected with us through the social media. If you have any types of quiries fell free to ask. You are always welcome.</p>
                    <div id="social-icon">
                        <span><a href="#" title="Facebook" target=""><i class="fab fa-facebook-f"></i></a></span>
                        <span><a href="#" title="Github" target=""><i class="fab fa-twitter"></i></i></a></span>
                        <span><a href="#" title="Instagram" target=""><i class="fab fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <p><i class="fas fa-copyright"></i> 2021 BookHut <br>All right reserved</p>
        </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url('tool/js/popper-1.12.9.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/all.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/owl.carousel.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/main.js'); ?>"></script>

</body>

</html>
