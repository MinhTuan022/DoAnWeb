<?php
session_start();
include_once('connect.php');

$cid = $_GET['CateID'];
$sql = "SELECT * FROM `product` WHERE CateID = " . $cid . " Limit 8";
$result = $con->query($sql) or die($conn->error);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
   <meta charset="UTF-8">
   <meta name="description" content="Ogani Template">
   <meta name="keywords" content="Ogani, unica, creative, html">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Ogani | Template</title>

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

   <!-- Css Styles -->
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
   <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
   <link rel="stylesheet" href="css/nice-select.css" type="text/css">
   <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
   <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
   <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
   <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
   <!-- Header Section Begin -->
   <?php include('include/header.php') ?>
   <!-- Header Section End -->

   <!-- Hero Section Begin -->
   <section class="hero hero-normal">
      <div class="container">
         <div class="row">
            <div class="col-lg-3">
               <div class="hero__categories">
                  <div class="hero__categories__all">
                     <i class="fa fa-bars"></i>
                     <span>All departments</span>
                  </div>
                  <ul>
                     <li><a href="#">Fresh Meat</a></li>
                     <li><a href="#">Vegetables</a></li>
                     <li><a href="#">Fruit & Nut Gifts</a></li>
                     <li><a href="#">Fresh Berries</a></li>
                     <li><a href="#">Ocean Foods</a></li>
                     <li><a href="#">Butter & Eggs</a></li>
                     <li><a href="#">Fastfood</a></li>
                     <li><a href="#">Fresh Onion</a></li>
                     <li><a href="#">Papayaya & Crisps</a></li>
                     <li><a href="#">Oatmeal</a></li>
                     <li><a href="#">Fresh Bananas</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-9">
               <div class="hero__search">
                  <div class="hero__search__form">
                     <form action="#">
                        <div class="hero__search__categories">
                           All Categories
                           <span class="arrow_carrot-down"></span>
                        </div>
                        <input type="text" placeholder="What do yo u need?">
                        <button type="submit" class="site-btn">SEARCH</button>
                     </form>
                  </div>
                  <div class="hero__search__phone">
                     <div class="hero__search__phone__icon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <div class="hero__search__phone__text">
                        <h5>+65 11.188.888</h5>
                        <span>support 24/7 time</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Hero Section End -->

   <!-- Breadcrumb Section Begin -->
   <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="breadcrumb__text">
                  <h2>Shoes Shop</h2>
                  <div class="breadcrumb__option">
                     <a href="./index.php">Home</a>
                     <span>Shop</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Breadcrumb Section End -->

   <!-- Product Section Begin -->
   <section class="product spad">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-5">
               <div class="sidebar">
                  <div class="sidebar__item">
                     <h4>Department</h4>
                     <ul>
                        <li><a href="#">Nike</a></li>
                        <li><a href="#">Balance</a></li>
                        <li><a href="#">Adidas</a></li>
                        <li><a href="#">Lacoste</a></li>
                        <li><a href="#">Puma</a></li>
                        <li><a href="#">Asics</a></li>
                     </ul>
                  </div>
                  <div class="sidebar__item">
                     <h4>Price</h4>
                     <div class="price-range-wrap">
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
                           <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                           <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                           <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                        <div class="range-slider">
                           <div class="price-input">
                              <input type="text" id="minamount">
                              <input type="text" id="maxamount">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sidebar__item sidebar__item__color--option">
                     <h4>Colors</h4>
                     <div class="sidebar__item__color sidebar__item__color--white">
                        <label for="white">
                           White
                           <input type="radio" id="white">
                        </label>
                     </div>
                     <div class="sidebar__item__color sidebar__item__color--gray">
                        <label for="gray">
                           Gray
                           <input type="radio" id="gray">
                        </label>
                     </div>
                     <div class="sidebar__item__color sidebar__item__color--red">
                        <label for="red">
                           Red
                           <input type="radio" id="red">
                        </label>
                     </div>
                     <div class="sidebar__item__color sidebar__item__color--black">
                        <label for="black">
                           Black
                           <input type="radio" id="black">
                        </label>
                     </div>
                     <div class="sidebar__item__color sidebar__item__color--blue">
                        <label for="blue">
                           Blue
                           <input type="radio" id="blue">
                        </label>
                     </div>
                     <div class="sidebar__item__color sidebar__item__color--green">
                        <label for="green">
                           Green
                           <input type="radio" id="green">
                        </label>
                     </div>
                  </div>
                  <div class="sidebar__item">
                     <h4>Popular Size</h4>
                     <div class="sidebar__item__size">
                        <label for="large">
                           Large
                           <input type="radio" id="large">
                        </label>
                     </div>
                     <div class="sidebar__item__size">
                        <label for="medium">
                           Medium
                           <input type="radio" id="medium">
                        </label>
                     </div>
                     <div class="sidebar__item__size">
                        <label for="small">
                           Small
                           <input type="radio" id="small">
                        </label>
                     </div>
                     <div class="sidebar__item__size">
                        <label for="tiny">
                           Tiny
                           <input type="radio" id="tiny">
                        </label>
                     </div>
                  </div>

               </div>
            </div>
            <div class="col-lg-9 col-md-7">
               <!-- <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-1.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-2.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Vegetables</span>
                                            <h5><a href="#">Vegetables’package</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-3.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Mixed Fruitss</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-4.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-5.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-6.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
               <div class="filter__item">
                  <div class="row">
                     <div class="col-lg-4 col-md-5">
                        <div class="filter__sort">
                           <span>Sort By</span>
                           <select>
                              <option value="0">Default</option>
                              <option value="0">Default</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4">
                        <div class="filter__found">
                           <h6><span>16</span> Products found</h6>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-3">
                        <div class="filter__option">
                           <span class="icon_grid-2x2"></span>
                           <span class="icon_ul"></span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="row">
            <div class="col-lg-12">
               <div class="section-title">
                  <h4>Sản Phẩm Bán Chạy</h4>
               </div>
            </div>
         </div> -->
               <div class="row featured__filter">
                  <?php
                  while ($row = $result->fetch_assoc()) {
                  ?>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="featured__item">
                           <a href="#">
                              <div class="featured__item__pic">
                                 <img src="img/all/<?php echo $row['ProPicture'] ?>" alt="">
                           </a>
                           <ul class="featured__item__pic__hover">
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                           </ul>
                        </div>
                        <div class="featured__item__text">
                           <h6><a href="#"><?php echo $row['ProName'] ?></a></h6>
                           <h5><?php echo number_format($row['ProPrice']) ?>,000₫</h5>
                        </div>
                     </div>
               </div>
            <?php
                  }
            ?>
            <div class="product__pagination">
               <a href="#">1</a>
               <a href="#">2</a>
               <a href="#">3</a>
               <a href="#"><i class="fa fa-long-arrow-right"></i></a>
            </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Product Section End -->

   <!-- Footer Section Begin -->
   <footer class="footer spad">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="footer__about">
                  <div class="footer__about__logo">
                     <a href="./index.html"><img src="img/logo.png" alt=""></a>
                  </div>
                  <ul>
                     <li>Address: 60-49 Road 11378 New York</li>
                     <li>Phone: +65 11.188.888</li>
                     <li>Email: hello@colorlib.com</li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
               <div class="footer__widget">
                  <h6>Useful Links</h6>
                  <ul>
                     <li><a href="#">About Us</a></li>
                     <li><a href="#">About Our Shop</a></li>
                     <li><a href="#">Secure Shopping</a></li>
                     <li><a href="#">Delivery infomation</a></li>
                     <li><a href="#">Privacy Policy</a></li>
                     <li><a href="#">Our Sitemap</a></li>
                  </ul>
                  <ul>
                     <li><a href="#">Who We Are</a></li>
                     <li><a href="#">Our Services</a></li>
                     <li><a href="#">Projects</a></li>
                     <li><a href="#">Contact</a></li>
                     <li><a href="#">Innovation</a></li>
                     <li><a href="#">Testimonials</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-4 col-md-12">
               <div class="footer__widget">
                  <h6>Join Our Newsletter Now</h6>
                  <p>Get E-mail updates about our latest shop and special offers.</p>
                  <form action="#">
                     <input type="text" placeholder="Enter your mail">
                     <button type="submit" class="site-btn">Subscribe</button>
                  </form>
                  <div class="footer__widget__social">
                     <a href="#"><i class="fa fa-facebook"></i></a>
                     <a href="#"><i class="fa fa-instagram"></i></a>
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     <a href="#"><i class="fa fa-pinterest"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="footer__copyright">
                  <div class="footer__copyright__text">
                     <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                           document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                  </div>
                  <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer Section End -->

   <!-- Js Plugins -->
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.nice-select.min.js"></script>
   <script src="js/jquery-ui.min.js"></script>
   <script src="js/jquery.slicknav.js"></script>
   <script src="js/mixitup.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/main.js"></script>



</body>

</html>