<?php session_start() ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ogani Template">
  <meta name="keywords" content="Ogani, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ogani</title>

  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

  <link rel="stylesheet"
    href="css/A.bootstrap.min.css+font-awesome.min.css+elegant-icons.css+nice-select.css+jquery-ui.min.css+owl.carousel.min.css+slicknav.min.css+style.css,Mcc.4YNTZ7I7f2.css.pagespeed.cf.sbKPPdYIiz.css"
    type="text/css" />
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- <div id="preloder">
    <div class="loader"></div>
  </div> -->

  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="header__top__left">
              <ul>
                <li><i class="fa fa-envelope"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                    data-cfemail="e088858c8c8fa0838f8c8f928c8982ce838f8d">[email&#160;protected]</a></li>
                <li>Free Shipping for all Order of ₹400+</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="header__top__right">
              <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
              </div>
              <div class="header__top__right__language">
                <img
                  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAAOABsDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAQHBv/EACsQAAACBwcDBQAAAAAAAAAAAAMEAAECBRES1AYWITFBU5MHVKQTMlGBof/EABYBAQEBAAAAAAAAAAAAAAAAAAUEBv/EACERAAAFAgcAAAAAAAAAAAAAAAADBRESARQEEyFRgZHB/9oADAMBAAIRAxEAPwCVMut4SKi7jUYYxBaWvXPDHX9+UqfSUsQAs+ZYexGUZZpa2fWZCUuWRmHvLiLhnr9Jpb6O3aF4zNYhfR3bQvGZrEuxSjcFwiw0KciWZ2bN9Nm9DktnOzA8ajQls52YHjUaJ30du0LxmaxC+jt2heMzWIaHuK9j/9k="
                  alt="" data-pagespeed-url-hash="2067729225"
                  onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                  <li><a href="#">Spanis</a></li>
                  <li><a href="#">English</a></li>
                </ul>
              </div>
              <?php 
                if(isset($_SESSION["username"])) {
                  echo '<div class="header__top__right__auth">
                          <a href="php/user/logout.php"> Logout - '.$_SESSION["username"].'</a>
                        </div>'; 
                }
                else{
                  echo '<div class="header__top__right__auth">
                          <a href="pages/login.html"><i class="fa fa-user"></i> Login - Signup</a>
                        </div>'; 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="header__logo">
            <a href="./index.php"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAAyCAMAAABRcrRnAAAAulBMVEUAAAAXFxefzyAhISGArzifzyAkJCQhISGWwiGArzWfzyUjIyOAqzifzyQkJCSGsjJ+rjeArDkkJCR+rDiArTiizyUkJCQlJSWizySDsTWezCQlJSV+rTihzySBsDUkJCR+rDmhzyM7RSgkJCR/rTigzyV+rDihzyUkJCR/rDl+rDmhzyR+rTihzyQkJCQ5RCh/rDl+rTihziUkJCR/rTigzyV+rTmhziSgzyR+rDigziQlJSV/rTmhzyXGaKLmAAAAO3RSTlMACxAXICAjLi4wMDtAQEdMT1BUX2BgYm9weXl9gICIjZCQk52fn6Cgr6+wsMDAxM7P0NDc39/g4O/w8Hi0izgAAAMpSURBVFjD7ZZrV9MwGMcbIq1aNqRKilYsMzoqbPUSFKTt9/9a5n5tCi88ebXnnO20SZpf8s9zSZZpO3nzIrPseJOlsbNx/PFWv60eptdpuCcjtbszsdmv0zRdJ+SO4xf6ePlAsdNDGu5HwR2/ZdeTsFUS7g1l/mXgT4+Se5GEy5h3fxj4A2Xu6e8yCZeLzDY9vqfM22RcvtUb9r/dT7f3lHuehLvlG2b/u/3jJTvf41R5g9oV525+U+x9ooTFhd7S/6vNZkomc5a9YtzdbhxPLxj2V5bK3jHu1bg759ijZNzsjIp88vMlw16nwpYNHqh9/1wcrS5WLrWsMWGdHUYlsDu6gVtpNYmW2jQg9o7N41BYoxEZtPWFAwV2n5pBWC7bmoA75M/hwm5wzJ6n6N0+m1vLNhJyu2dwczIMMfDa77K5ekllwB3Qk1zQDYHVARZT87hcZuIJpMYT+BS3kcqwRUN1mKITyjcsNwTKuvFkbj2hA2Fi3MKVVoouBmLRt54PAT6y8EYYzcplbuP5QWkcsljE8oG9WFvrcvmKCFjkDn5QYe0XYkltJOIb4QgVHwQcbm2deoRbeNtVvoSVkFYozsmcQVcTsejKECJc5OcXmQ2Ieugj2LVyqN4RRYqF9acRroj9KgtCX0mBPXcZ5KhWSVk7Qkturg8rwsVBztRcZCWAgAu0vLkjtPoGqTP6z9y12SWxw1V/08vWCLcNQ8XlNvNcK3yE20OPW8gDXPQrZGGhcif7fBGz3nCh5Ral7SJmuloEcYS7jsRRq8sc8CKbP1ZBSu98LuD6txEu9OulnL3S8YvmuDO1BHpcqQOO5KvOK2+l2WXjVhaLC0OsFNpeausVCYe7nq0LjXWf6GDArWe4XcCFZIGrJMOiDjrVU5ZIgqB1LTEVv1DWG6Gdo6mWuOF1Q8cV0DeKHuPexFHuFYzaJFvXJfACV5W7EDu/ppnkamVyl5svcf3ZiZVFIPaxRDs69G9aecCVqNg9FjT2pQ66dce5UBIElMt3fi3mQntceVKx+3MGqrbnx1jBoOLlSJwtvbYXFgX5dw8utN9VLHMPdrCDHeyZ9g8GzoR0dW19NwAAAABJRU5ErkJggg=="
                alt="" data-pagespeed-url-hash="3970492880"
                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="header__menu">
            <ul>
              <li class="active"><a href="./index.php">Home</a></li>
              <li><a href="#">Shop</a></li>
              <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                  <li><a href="#">Shop Details</a></li>
                  <li><a href="#">Shoping Cart</a></li>
                  <li><a href="#">Check Out</a></li>
                  <li><a href="#">Blog Details</a></li>
                </ul>
              </li>
              <li><a href="./pages/contact.html">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3">
        <?php 
            $total_items = 0;
            $total_price = 0;
            if(!empty($_SESSION["cart"])) {
              include 'php/db.php';
              $whereIn = implode(',', $_SESSION["cart"]);
              $query = "SELECT * FROM product WHERE id IN ($whereIn)";
              $result = mysqli_query($connect, $query);
              while($row = mysqli_fetch_array($result)){
                $total_items++;
                $total_price += $row["price"];
              }
              echo '<div class="header__cart">
                    <ul>
                      <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                      <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>'.$total_items.'</span></a></li>
                    </ul>
                    <div class="header__cart__price">sub total: <span>₹'.$total_price.'</span></div>
                  </div>';
            }
        ?>
        </div>
      </div>
      <div class="humberger__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>


  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="hero__categories">
            <div class="hero__categories__all">
              <i class="fa fa-bars"></i>
              <span>All Categories</span>
            </div>
            <ul>
              <li><a href="#featured-products">All Products</a></li>
              <li><a href="#featured-products">Baby</a></li>
              <li><a href="#featured-products">Beauty</a></li>
              <li><a href="#featured-products">Hair</a></li>
              <li><a href="#featured-products">Face</a></li>
              <li><a href="#featured-products">Body</a></li>
              <li><a href="#featured-products">Gift Packs</a></li>
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
          <div class="hero__item set-bg" data-setbg="img/bg.jpg">
            <div class="hero__text">
              <span>Cosmetic Products</span>
              <h2>Products <br />100% Natural</h2>
              <p>Free Pickup and Delivery Available</p>
              <a href="#featured-products" class="primary-btn">SHOP NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="featured-products" class="featured spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Featured Product</h2>
          </div>
          <div class="featured__controls">
            <ul>
              <li class="active" data-filter="*">All</li>
              <li data-filter=".baby">Baby</li>
              <li data-filter=".beauty">Beauty</li>
              <li data-filter=".hair">Hair</li>
              <li data-filter=".face">Face</li>
              <li data-filter=".body">Body</li>
              <li data-filter=".giftpacks">Gift Packs</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="row featured__filter">
      <?php 
        include 'php/db.php';

        $query1 = "SELECT * FROM product WHERE category = 'baby'";
        $result1 = mysqli_query($connect, $query1);
        while($row = mysqli_fetch_array($result1)){
          echo '
            <div class="col-lg-3 col-md-4 col-sm-6 mix '.$row["category"].' fresh-meat">
            <div class="featured__item">
              <div class="featured__item__pic set-bg" data-setbg="uploads/'.$row["image"].'">
                <ul class="featured__item__pic__hover">
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li><a href="php/user/cart.php/?id='.$row["id"].'"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured__item__text">
                <h6><a href="#">'.$row["title"].'</a></h6>
                <h5>₹'.$row["price"].'</h5>
              </div>
            </div>
          </div>';
        }

        $query2 = "SELECT * FROM product WHERE category = 'beauty'";
        $result2 = mysqli_query($connect, $query2);
        while($row = mysqli_fetch_array($result2)){
          echo '
            <div class="col-lg-3 col-md-4 col-sm-6 mix '.$row["category"].' fresh-meat">
            <div class="featured__item">
              <div class="featured__item__pic set-bg" data-setbg="uploads/'.$row["image"].'">
                <ul class="featured__item__pic__hover">
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li><a href="php/user/cart.php/?id='.$row["id"].'"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured__item__text">
                <h6><a href="#">'.$row["title"].'</a></h6>
                <h5>₹'.$row["price"].'</h5>
              </div>
            </div>
          </div>';
        }

        $query3 = "SELECT * FROM product WHERE category = 'hair'";
        $result3 = mysqli_query($connect, $query3);
        while($row = mysqli_fetch_array($result3)){
          echo '
            <div class="col-lg-3 col-md-4 col-sm-6 mix '.$row["category"].' fresh-meat">
            <div class="featured__item">
              <div class="featured__item__pic set-bg" data-setbg="uploads/'.$row["image"].'">
                <ul class="featured__item__pic__hover">
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li><a href="php/user/cart.php/?id='.$row["id"].'"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured__item__text">
                <h6><a href="#">'.$row["title"].'</a></h6>
                <h5>₹'.$row["price"].'</h5>
              </div>
            </div>
          </div>';
        }

        $query4 = "SELECT * FROM product WHERE category = 'face'";
        $result4 = mysqli_query($connect, $query4);
        while($row = mysqli_fetch_array($result4)){
          echo '
            <div class="col-lg-3 col-md-4 col-sm-6 mix '.$row["category"].' fresh-meat">
            <div class="featured__item">
              <div class="featured__item__pic set-bg" data-setbg="uploads/'.$row["image"].'">
                <ul class="featured__item__pic__hover">
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li><a href="php/user/cart.php/?id='.$row["id"].'"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured__item__text">
                <h6><a href="#">'.$row["title"].'</a></h6>
                <h5>₹'.$row["price"].'</h5>
              </div>
            </div>
          </div>';
        }

        $query = "SELECT * FROM product WHERE category = 'body'";
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result)){
          echo '
            <div class="col-lg-3 col-md-4 col-sm-6 mix '.$row["category"].' fresh-meat">
            <div class="featured__item">
              <div class="featured__item__pic set-bg" data-setbg="uploads/'.$row["image"].'">
                <ul class="featured__item__pic__hover">
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li><a href="php/user/cart.php/?id='.$row["id"].'"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured__item__text">
                <h6><a href="#">'.$row["title"].'</a></h6>
                <h5>₹'.$row["price"].'</h5>
              </div>
            </div>
          </div>';
        }

        $query = "SELECT * FROM product WHERE category = 'giftpacks'";
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result)){
          echo '
            <div class="col-lg-3 col-md-4 col-sm-6 mix '.$row["category"].' fresh-meat">
            <div class="featured__item">
              <div class="featured__item__pic set-bg" data-setbg="uploads/'.$row["image"].'">
                <ul class="featured__item__pic__hover">
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                  <li><a href="php/user/cart.php/?id='.$row["id"].'"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="featured__item__text">
                <h6><a href="#">'.$row["title"].'</a></h6>
                <h5>₹'.$row["price"].'</h5>
              </div>
            </div>
          </div>';
        }
      ?>
      </div>
    </div>
  </section>


  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="banner__pic">
            <img src="img/banner/xbanner-1.jpg.pagespeed.ic.-NRyTdVwji.jpg" alt="" data-pagespeed-url-hash="1603436532"
              onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="banner__pic">
            <img src="img/banner/xbanner-2.jpg.pagespeed.ic.pSCK_iOvxr.jpg" alt="" data-pagespeed-url-hash="1897936453"
              onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- <section class="latest-product spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="latest-product__text">
            <h4>Latest Products</h4>
            <div class="latest-product__slider owl-carousel">
              <div class="latest-prdouct__slider__item">

              <?php
                $query = "SELECT * FROM product ORDER BY id DESC LIMIT 4";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result)){
                  echo '<a href="#" class="latest-product__item">
                        <div class="latest-product__item__pic">
                          <img src="uploads/'.$row["image"].'" alt=""
                            data-pagespeed-url-hash="195239175"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                        <div class="latest-product__item__text">
                          <h6>'.$row["title"].'</h6>
                          <span>₹'.$row["price"].'</span>
                        </div>
                      </a>';
                }
              ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->


  <footer class="footer spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer__about">
            <div class="footer__about__logo">
              <a href="./index.html"><img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAAyCAMAAABRcrRnAAAAulBMVEUAAAAXFxefzyAhISGArzifzyAkJCQhISGWwiGArzWfzyUjIyOAqzifzyQkJCSGsjJ+rjeArDkkJCR+rDiArTiizyUkJCQlJSWizySDsTWezCQlJSV+rTihzySBsDUkJCR+rDmhzyM7RSgkJCR/rTigzyV+rDihzyUkJCR/rDl+rDmhzyR+rTihzyQkJCQ5RCh/rDl+rTihziUkJCR/rTigzyV+rTmhziSgzyR+rDigziQlJSV/rTmhzyXGaKLmAAAAO3RSTlMACxAXICAjLi4wMDtAQEdMT1BUX2BgYm9weXl9gICIjZCQk52fn6Cgr6+wsMDAxM7P0NDc39/g4O/w8Hi0izgAAAMpSURBVFjD7ZZrV9MwGMcbIq1aNqRKilYsMzoqbPUSFKTt9/9a5n5tCi88ebXnnO20SZpf8s9zSZZpO3nzIrPseJOlsbNx/PFWv60eptdpuCcjtbszsdmv0zRdJ+SO4xf6ePlAsdNDGu5HwR2/ZdeTsFUS7g1l/mXgT4+Se5GEy5h3fxj4A2Xu6e8yCZeLzDY9vqfM22RcvtUb9r/dT7f3lHuehLvlG2b/u/3jJTvf41R5g9oV525+U+x9ooTFhd7S/6vNZkomc5a9YtzdbhxPLxj2V5bK3jHu1bg759ijZNzsjIp88vMlw16nwpYNHqh9/1wcrS5WLrWsMWGdHUYlsDu6gVtpNYmW2jQg9o7N41BYoxEZtPWFAwV2n5pBWC7bmoA75M/hwm5wzJ6n6N0+m1vLNhJyu2dwczIMMfDa77K5ekllwB3Qk1zQDYHVARZT87hcZuIJpMYT+BS3kcqwRUN1mKITyjcsNwTKuvFkbj2hA2Fi3MKVVoouBmLRt54PAT6y8EYYzcplbuP5QWkcsljE8oG9WFvrcvmKCFjkDn5QYe0XYkltJOIb4QgVHwQcbm2deoRbeNtVvoSVkFYozsmcQVcTsejKECJc5OcXmQ2Ieugj2LVyqN4RRYqF9acRroj9KgtCX0mBPXcZ5KhWSVk7Qkturg8rwsVBztRcZCWAgAu0vLkjtPoGqTP6z9y12SWxw1V/08vWCLcNQ8XlNvNcK3yE20OPW8gDXPQrZGGhcif7fBGz3nCh5Ral7SJmuloEcYS7jsRRq8sc8CKbP1ZBSu98LuD6txEu9OulnL3S8YvmuDO1BHpcqQOO5KvOK2+l2WXjVhaLC0OsFNpeausVCYe7nq0LjXWf6GDArWe4XcCFZIGrJMOiDjrVU5ZIgqB1LTEVv1DWG6Gdo6mWuOF1Q8cV0DeKHuPexFHuFYzaJFvXJfACV5W7EDu/ppnkamVyl5svcf3ZiZVFIPaxRDs69G9aecCVqNg9FjT2pQ66dce5UBIElMt3fi3mQntceVKx+3MGqrbnx1jBoOLlSJwtvbYXFgX5dw8utN9VLHMPdrCDHeyZ9g8GzoR0dW19NwAAAABJRU5ErkJggg=="
                  alt="" data-pagespeed-url-hash="3970492880"
                  onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <ul>
              <li>Address: 60-49 Road 11378 New York</li>
              <li>Phone: +65 11.188.888</li>
              <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                  data-cfemail="036b666f6f6c43606c6f6c716f6a612d606c6e">[email&#160;protected]</a></li>
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
              <p>
                Copyright &copy;
                <script data-cfasync="false"
                  src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                  target="_blank">Colorlib</a>
              </p>
            </div>
            <div class="footer__copyright__payment"><img src="img/xpayment-item.png.pagespeed.ic.IsCge16PaL.png" alt=""
                data-pagespeed-url-hash="577918195" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js+jquery.nice-select.min.js.pagespeed.jc.08NHUfMhux.js"></script>
  <script>eval(mod_pagespeed_ND6iIrfFHB);</script>
  <script>eval(mod_pagespeed_2CR7bSFHcL);</script>
  <script src="js/all.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
    data-cf-beacon='{"rayId":"668da77c89fbe247","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>
</body>

</html>