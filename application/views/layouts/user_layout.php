<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==== CSS =====-->

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.min.css'); ?>">
    <!-- Font-awesome css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/all.css'); ?>">
    <!-- Owl-carousel css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/owl.carousel.min.css'); ?>">
    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>">
    
    <!-- jQuery min js -->
    <script type="text/javascript" src="<?= base_url('tool/js/jquery-3.2.1.slim.min.js'); ?>"></script>

    <title>BookHut | User pages</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('tool/img/favicon.png'); ?>">
</head>

<body>
    <!--=========== Header area =============-->
<!--     <div class="header-area">
        <div class="hearder-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-tx">Welcome to Online BookHut !</div>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icon">
                            <span>Follow : </span>
                            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="Github"><i class="fab fa-github"></i></a>
                            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- </div> -->
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
    <form class="form-inline my-2 my-lg-0 ml-auto" id="search" role="search">
        <div class="admin-search search">
                        <?= form_open('users/search', ['id'=>'user-search'])?>
                            <input type="text" name="search_book" class="form-control" placeholder="Search any book">
                            <button type="submit"><i class="fas fa-search"></i></button>
                      <?= form_close()?>
                      </div>
</form>
   
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
        <!--============ Menu Area =============-->
        <div>
            <?php $this->load->view('temp/menu'); ?>
        </div>
    </div>
    <!-- ========== single header ==========-->
    
    <!--============ Content-area ===========-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12" style="min-height: 500px">
                <?php $this->load->view($user_view); ?>
            </div>
        </div>
    </div>



    <!--============== Footer Area ==============-->
    <div>
        <?php $this->load->view('temp/footer'); ?>
    </div>
