<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/nav2.css">
    <link rel="stylesheet" href="./css/global-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!--font awesome icons-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>

    <title>Meta | Home</title>
</head>

<body>

    <section class="banner">
      <div class="text1">
        <h1>
          <span>Welcome</span>
          <span>to</span>
          <span>Meta</span>
        </h1>
      </div>
      <div class="text2">
        <h1>
          <span>Your</span>
          <span>PC</span>
          <span>needs</span>
          <span>and</span>
          <span>best</span>
          <span>solutions</span>
        </h1>
      </div>
      <div class="text3">
        <span>
        <a href="">shop&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </span>
      </div>
    </section>

    <section class="catagories">
      <a href="index.php?page=laptops">
        <div class="cat">
          <h2 class="eff">Laptops</h2>
          <img src="./image/laptop.png" alt="" style="width: 100%; object-fit: contain">
        </div>
      </a>
      <a href="index.php?page=desktop">
        <div class="cat">
          <h2 class="eff">Desktops</h2>
          <img src="./image/desktop.png" alt="" style="width: 100%; object-fit: contain">
        </div>
      </a>
      <a href="index.php?page=components">
        <div class="cat">
          <h2 class="eff">Components</h2>
          <img src="./image/pro.png" alt="" style="width: 100%; object-fit: contain">
        </div>
      </a>
      <a href="index.php?page=accesories">
        <div class="cat">
          <h2 class="eff">Accesories</h2>
          <img src="./image/keyboard.png" alt="" style="width: 100%; object-fit: contain">
        </div>
      </a>
      <a href="">
        <div class="cat">
          <h2 class="eff">Campus Store</h2>
          <img src="./image/campus store.png" alt="" style="width: 100%; object-fit: contain">
        </div>
      </a>
    </section>

    <section class="dual">
      <div class="header">
        <h1>This Week Deals</h1>
      </div>
      <div class="two-deals">
        <div class="cat-01">
          <div class="description">
            <h2 class="bold">Graphic Cards</h2>
            <h4><s>Rs 70,000</s></h4>
            <h2 style="margin-bottom: 1rem;">Rs 60,000</h2>
            <a href="">Shop Now</a>
          </div>
          <div class="img">
            <img src="./image/Graphics-Card-Transparent-Background.png" alt="" width="180" height="160">
          </div>
        </div>
        <div class="cat-02">
          <div class="description">
            <h2 class="bold">Motherboards</h2>
            <h4>Rs 50,000</h4>
            <h2 style="margin-bottom: 1rem;">Rs 35,000</h2>
            <a href="">Shop Now</a>
          </div>
          <div class="img">
            <img src="./image/motherboard.png" alt="" width="180" height="160">
          </div>
        </div>
      </div>
    </section>

    <section class="products1">
      <h1 class="header">Featured Products</h1>
      <p class="subject">There are many variations of products, just dive through</p>
      <div class="posts">
        <div class="post-1 pad_post">
          <img src="./image/msi gf63.png" alt="msi gf63" style="width: 100%; object-fit: contain"/>
          <p>Laptops</p>
          <div class="product-name">
            <h1>MSI GF63</h1>
          </div>
          <p>Rs 420,000.00</p>
          <div class="buttons">
            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="post-2 pad_post">
          <img src="./image/zenbook.png" alt="Zen book pro duo" style="width: 100%; object-fit: contain"/>
          <p>Laptops</p>
          <div class="product-name">
            <h1>AZUS ZENBOOK PRO DUO</h1>
          </div>
          <p>Rs 990,000</p>
          <div class="buttons">
            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="post-3 pad_post">
          <img src="./image/trx2.png" alt="rtx 3080" style="width: 100%; object-fit: contain"/>
          <p>Graphic cards</p>
          <div class="product-name">
            <h1>MSI RTX 3080 ti GAMING TRIO 12GB </h1>
          </div>
          <p>Rs 529,000</p>
          <div class="buttons">
            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="post-4 pad_post">
          <img src="./image/nzxt.png" alt="nzxt kraken z63" style="width: 100%; object-fit: contain"/>
          <p>Cooling Items</p>
          <div class="product-name">
            <h1>NZXT KRAKEN Z63</h1>
          </div>
          <p>Rs 120,000</p>
          <div class="buttons">
            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="post-5 pad_post">
          <img src="./image/K10.png" alt="azus gamig keyboard" style="width: 100%; object-fit: contain"/>
          <p>Keyboards</p>
          <div class="product-name">
            <h1>ASUS TUF GAMING K10 KEYBOARD</h1>
          </div>
          <p>Rs 14,500</p>
          <div class="buttons">
            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="post-6 pad_post">
          <img src="./image/msi.png" alt="MSI MAG FORGE 100M CASING" style="width: 100%; object-fit: contain"/>
          <p>Casings</p>
          <div class="product-name">
            <h1>MSI MAG FORGE 100M</h1>
          </div>
          <p>Rs 12,500</p>
          <div class="buttons">
            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="post-7 pad_post">
          <img src="./image/i5.png" alt="intel i5 12 generation processor" style="width: 100%; object-fit: contain"/>
          <p>Processors</p>
          <div class="product-name">
            <h1>INTEL i5-12600K</h1>
          </div>
          <p>Rs 120,000</p>
          <div class="buttons">
            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="post-8 pad_post">
          <img src="./image/ram2.png" alt="" style="width: 100%; object-fit: contain"/>
          <p>Memory(Ram)</p>
          <div class="product-name">
            <h1>CROSAIR VENGEANCE RGB 16GB DDR4 3600MHZ</h1>
          </div>
          <p>Rs 32,000</p>
          <div class="buttons">
            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section class="slider">
      <h1 class="header">Authorized dealership with</h1>
      <div class="brand-carousel section-padding owl-carousel">
        <div class="single-logo">
          <img src="./image/asus.png" alt="">
        </div>
        <div class="single-logo">
          <img src="./image/msi-logo-2.png" alt="">
        </div>
        <div class="single-logo">
          <img src="./image/logitech.png" alt="">
        </div>
        <div class="single-logo">
          <img src="./image/a4tech.png" alt="">
        </div>
        <div class="single-logo">
          <img src="./image/microlab.png" alt="">
        </div>
        <div class="single-logo">
          <img src="./image/corsair.png" alt="">
        </div>
        <div class="single-logo">
          <img src="./image/kingston.png" alt="">
        </div>
        <div class="single-logo">
          <img src="./image/nzxt-logo.png" alt="">
        </div>
      </div>
    </section>

    <section class="features">
      <div class="feature-list">
        <div class="single-feature">
          <i class="fa fa-truck" aria-hidden="true"></i> <h2>Free Delivery</h2>
        </div>
        <div class="single-feature">
          <i class="fa fa-credit-card" aria-hidden="true"></i> <h2>Card Payments</h2>
        </div>
        <div class="single-feature fea-last">
          <i class="fa fa-archive" aria-hidden="true"></i> <h2>Easy Returns</h2>
        </div>
      </div>
    </section>

    <section class="comments">
      <h1>Client Feedback</h1>
      <div class="testimonial">
        <div class="testimonial-01">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem veritatis blanditiis doloribus sapiente necessitatibus aliquid delectus quod nostrum voluptate natus.</p>
          <div class="client-info">
            <img src="./image/msi.jpg" alt="" width="50" height="50">
            <h2>John Doe</h2>
          </div>
        </div>
        <div class="testimonial-02">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem veritatis blanditiis doloribus sapiente necessitatibus aliquid delectus quod nostrum voluptate natus.</p>
          <div class="client-info">
            <img src="./image/msi.jpg" alt="" width="50" height="50">
            <h2>John Doe</h2>
          </div>
        </div>
      </div>
    </section>


    <script src="./js/nav.js"></script>
    <script src="./js/slider.js"></script>
</body>
</html>

<?=template_footer()?>