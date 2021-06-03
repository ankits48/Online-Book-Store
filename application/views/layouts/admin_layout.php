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

    <title>BookHut | Admin Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('tool/img/favicon.png'); ?>">
</head>

<body>
    <!--========== Header area ===========-->
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
  
        
                     

  </div>
</nav>

        <!--============ Menu Area ===========-->
        <!-- Admin doesn't have any menu -->
    </div>
        <!-- =========== single header ==========-->
    <div class="single-header-a">
        <div class="container">
            <span><a href="<?= base_url() ?>home"><i class="fas fa-home"></i> Home</a> / 
            <a href="<?= base_url()?>admin">Admin Dashboard</a></span>
        </div>
    </div>
    <!--========== Content-area ==========-->
    <div class="admin-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-3 admin-nav">
                    <?php $this->load->view('admin/admin_nav'); ?>
                </div>
                <div class="col-md-10 col-sm-9">
                    <?php $this->load->view($admin_view); ?><br>

                    <!--============ Footer Area ============-->
                    <div>
                        <?php $this->load->view('temp/footer'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>