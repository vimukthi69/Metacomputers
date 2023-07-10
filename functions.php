<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
// Get the number of items in the shopping cart, which will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/nav2.css">
        <link rel="stylesheet" href="./css/global-styles.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <header>
    <nav class="nav-bar">
      <div class="line-01">
        <h3>142/1/1 KOTUGODA ROAD, MUKALANGAMUWA, SEEDUWA</h3>
        <div class="nums">
          <h3>077 067 0436 | 074 100 2003</h3>
        </div>
      </div>
      <div class="line-02">
        <a class="logo">
          <img src="./image/png white.png" alt="zieg">
        </a>
        <div class="hamberger">
          <span class="line1"></span>
          <span class="line2"></span>
          <span class="line3"></span>
        </div>
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="">About</a></li>
          <div class="dropdown">
            <li><a href="">Products<i class="fa fa-angle-down" aria-hidden="true" style="margin-left: .5rem;"></i></a></li>
            <div class="dropdown-content">
              <li><a href="index.php?page=laptops">laptops</a></li>
              <li><a href="index.php?page=desktop">Desktop</a></li>
              <li><a href="index.php?page=components">Components</a></li>
              <li><a href="index.php?page=accesories">Accesories</a></li>
              <li><a href="">Campus Store</a></li>
            </div>
          </div>
          <li><a href="">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="icons">
        <a href="index.php?page=cart">
            <i class="fas fa-shopping-cart float-right" aria-hidden="true" style="font-size: 1.5rem;color: #A08C5B;margin-right: 2rem;"></i>
            <span style="font-size: 0.8rem;color: #A08C5B;">$num_items_in_cart</span>
        </a>
        </div>
      </div>
    </nav>
  
  </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <div class="footer-block">
        <footer>
        <div class="footer-col">
          <img src="./image/png white.png" alt="" width="120" height="40">
          <p>To deliver an outstanding quality service that: Customers are satisfied with and recommend to friends and family.</br>We care your dreams.</p>
          <div class="social-icons">
              <a href=""><i class="fa fa-facebook" aria-hidden="true" style="color: white; font-size: 1rem;"></i></a>
              <a href=""><i class="fa fa-twitter" aria-hidden="true" style="color: white; font-size: 1rem;"></i></a>
              <a href=""><i class="fa fa-instagram" aria-hidden="true" style="color: white; font-size: 1rem;"></i></a>
              <a href=""><i class="fa fa-youtube" aria-hidden="true" style="color: white; font-size: 1rem;"></i></a>
          </div>
      </div>
      <div class="footer-col">
          <a href=""><h2>My Acoount</h2></a>
          <a href=""><h3>My Account</h3></a>
          <a href=""><h3>Contact</h3></a>
          <a href=""><h3>Shop</h3></a>
          <a href=""><h3>Shopping Cart</h3></a>
          <a href=""><h3>Services Login</h3></a>
      </div>
      <div class="footer-col">
          <h2>Services</h2>
          <a href=""><h3>Delivery</h3></a>
          <a href=""><h3>Warrenty</h3></a>
          <a href=""><h3>build</h3></a>
          <a href=""><h3>Shopping Cart</h3></a>
          <a href=""><h3>Services Login</h3></a>
      </div>
      <div class="footer-col link contact">
          <h2>Contact Info</h2>
          <h3>Address : 142/1/1 Kotugoda rd, Mukalangamuwa, Seeduwa</h3>
          <h3>Phone : +94 741002005</h3>
          <h3>email : metacomputers@gmail.com</h3>
          <h3>metacomputers.lk</h3>
          <h4>Designed and Developed by <a href="https://ziegind.com" target="_blank">www.ziegind.com</a></h4>
      </div>
      </footer>
      <div class="raw-two">
        <section class="tc">
          <div class="copyright">
            Meta Computers 	&copy; 2023
          </div>
          <div class="tcpp">
            <a class="ml">Terms and Conditions</a>
            <a>Privacy and Policy</a>
          </div>
        </section>
      </div>
    </div>
    </body>
</html>
EOT;
}
?>