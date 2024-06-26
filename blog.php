<?php
  include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance Store</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/16defca36a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<!---navigation--> 

<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
      <img src="./img/LogoMakr-1.png" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i id="bar" class="fa fa-bar"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <i class="fa-brand fa-search"></i>
            <i class="fa-brand fa-bag-shopping"></i>
          </li>
          
      </div>
    </div>
  </nav>

  <section id="blog-home" class="pt-5 mt-5 container">
    <h2 class="font-weight-bold pt-5">Blogs</h2>
    <hr>
  </section>


  <section id="blog-container" class="container pt-5">
    <div class="row">
        <div class="post col-lg-6 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fluid w-100" src="./img/blog/1.jpg" alt="">
            </div>
            <h3 class="text-center font-weight-normal pt-3">The best ways to change your summer wardrobe into autumn wardrobe.</h3>
            <p class="text-center">Jan 11, 2023</p>
        </div>
        <div class="post col-lg-6 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fluid w-100" src="./img/blog/2.jpg" alt="">
            </div>
            <h3 class="text-center font-weight-normal pt-3">Mens's fashion in Leather.</h3>
            <p class="text-center">Jan 12, 2023</p>
        </div>
        <div class="post col-lg-6 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fluid w-100" src="./img/blog/3.jpg" alt="">
            </div>
            <h3 class="text-center font-weight-normal pt-3">Diyer and TV host Trisha Hersherger's journey through gaming keeps evolving.</h3>
            <p class="text-center">Jan 13, 2023</p>
        </div>
        <div class="post col-lg-6 col-md-6 col-12 pb-5">
            <div class="post-img">
                <img class="img-fluid w-100" src="./img/blog/4.jpg" alt="">
            </div>
            <h3 class="text-center font-weight-normal pt-3">The best ways to change your summer wardrobe into autumn wardrobe.</h3>
            <p class="text-center">Jan 14, 2023</p>
        </div>


        <div class=" col-lg-12 col-md-12 col-12 pb-5">
            <div class="post-img">
                <img class="img-fluid w-100" src="./img/blog/banner.webp" alt="">
            </div>
        </div>


            <div class="post col-lg-4 col-md-6 col-12 pb-5">
                <div class="post-img">
                    <img class="img-fluid w-100" src="./img/blog/1.webp" alt="">
                </div>
                <h4 class= "font-weight-normal pt-3">The best ways to change your summer wardrobe into autumn wardrobe.</h4>
                
            </div>
            <div class="post col-lg-4 col-md-6 col-12 pb-5">
                <div class="post-img">
                    <img class="img-fluid w-100" src="./img/blog/3.webp" alt="">
                </div>
                <h4 class= "font-weight-normal pt-3">Lenovo's smarter devices stoke professional passions.</h4>
                
            </div>
            <div class="post col-lg-4 col-md-6 col-12 pb-5">
                <div class="post-img">
                    <img class="img-fluid w-100" src="./img/blog/2.webp" alt="">
                </div>
                <h4 class= "font-weight-normal pt-3">Take a 3D tour through a Microsoft datacenter.</h4>
                
            </div>

           
        
    </div>
  </section>


  <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-6 col-12">
        <img src="./img/LogoMaker-2.png" alt="">
        <p class="pt-3">
          Fringilla urna porttitor rhoncus dolor purus luctus venenatis lectus magna fringilla diam maecenas ultricies mineget mauris
        </p>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
        <h5 class="pb-2">Featured</h5>
        <ul class="text-uppercase list-unstyled">
          <li><a href="#">men</a></li>
          <li><a href="#">women</a></li>
          <li><a href="#">boys</a></li>
          <li><a href="#">girls</a></li>
          <li><a href="#">new arrivals</a></li>
          <li><a href="#">shoes</a></li>
          <li><a href="#">clothes</a></li>
        </ul>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
        <h5 class="pb-2">Contact Us</h5>
        <div>
          <h6 class="text-uppercase">Address</h6>
          <p>MAJDEL ANJAR, MASNAA</p>
        </div>
        <div>
          <h6 class="text-uppercase">Phone</h6>
          <p>+961 81 091 429<p>
        </div>
        <div>
          <h6 class="text-uppercase">Email</h6>
          <p>youssefbaydoun126@gmail.com</p>
        </div>
      </div>
  
      <div class="footer-one col-lg-3 col-md-6 col-12">
        <h5 class="pb-2">Instagram</h5>
        <div class="row">
          <img class="img-fluid w-25 h-100 m-2" src="./img/insta/1.jpg" alt="">
          <img class="img-fluid w-25 h-100 m-2" src="./img/insta/2.jpg" alt="">
          <img class="img-fluid w-25 h-100 m-2" src="./img/insta/3.jpg" alt="">
          <img class="img-fluid w-25 h-100 m-2" src="./img/insta/4.jpg" alt="">
          <img class="img-fluid w-25 h-100 m-2" src="./img/insta/5.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="copyright mt-5">
      <div class="row container mx-auto">
        <div class="col-lg-3 col-md-6 col-12 mb-4">
          <img src="./img/payment.png" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-12 mb-2">
          <p>elegance eCommerce © 2023. All Rights Reserved</p>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </footer>
  
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
       integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
       integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
      
  </body>
  </html>