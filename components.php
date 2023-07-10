<?php
// The amounts of products to show on each page
$num_products_on_each_page = 150;
// The current page - in the URL, will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;

// Construct the base query
$query = 'SELECT * FROM components';

// Check if the VGA filter is selected
if (isset($_GET['vga']) && $_GET['vga'] === '1') {
    $query .= " WHERE category = 'vga'";
}

// Check if the processor filter is selected
if (isset($_GET['processor']) && $_GET['processor'] === '1') {
    $query .= " WHERE category = 'processor'";
}

// Check if the cooling filter is selected
if (isset($_GET['cooling']) && $_GET['cooling'] === '1') {
    $query .= " WHERE category = 'cooling'";
}

// Check if the motherboard filter is selected
if (isset($_GET['motherboard']) && $_GET['motherboard'] === '1') {
    $query .= " WHERE category = 'motherboard'";
}

// Check if the ram filter is selected
if (isset($_GET['ram']) && $_GET['ram'] === '1') {
    $query .= " WHERE category = 'ram'";
}

// Check if the monitor filter is selected
if (isset($_GET['monitor']) && $_GET['monitor'] === '1') {
    $query .= " WHERE category = 'monitor'";
}

// Check if the storage filter is selected
if (isset($_GET['storage']) && $_GET['storage'] === '1') {
    $query .= " WHERE category = 'storage'";
}

// Check if the storage filter is selected
if (isset($_GET['power']) && $_GET['power'] === '1') {
    $query .= " WHERE category = 'power'";
}

// Check if the casing filter is selected
if (isset($_GET['casing']) && $_GET['casing'] === '1') {
    $query .= " WHERE category = 'casing'";
}

// Add the ordering and pagination clauses
$query .= ' ORDER BY date_added DESC LIMIT ?, ?';

// Prepare and execute the query
$stmt = $pdo->prepare($query);
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();

// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM components')->rowCount();

// Check if the request is AJAX
$is_ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
?>

<?php if (!$is_ajax): ?>
    <?= template_header('Components') ?>

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

    <title>Meta | Components</title>
</head>

<body>

<div class="products content-wrapper">
        <h1>Components</h1>
        <p><?= $total_products ?> Products</p>
        <form id="filter-form">
            <label for="vga-filter">VGA</label>
            <input type="checkbox" id="vga-filter" name="vga" value="1" <?= isset($_GET['vga']) && $_GET['vga'] === '1' ? 'checked' : '' ?>>
            <label for="processor-filter">PROCESSOR</label>
            <input type="checkbox" id="processor-filter" name="processor" value="1" <?= isset($_GET['processor']) && $_GET['processor'] === '1' ? 'checked' : '' ?>>
            <label for="cooling-filter">COOLING</label>
            <input type="checkbox" id="cooling-filter" name="cooling" value="1" <?= isset($_GET['cooling']) && $_GET['cooling'] === '1' ? 'checked' : '' ?>>
            <label for="motherboard-filter">MOTHERBOARD</label>
            <input type="checkbox" id="motherboard-filter" name="motherboard" value="1" <?= isset($_GET['motherboard']) && $_GET['motherboard'] === '1' ? 'checked' : '' ?>>
            <label for="ram-filter">RAM</label>
            <input type="checkbox" id="ram-filter" name="ram" value="1" <?= isset($_GET['ram']) && $_GET['ram'] === '1' ? 'checked' : '' ?>>
            <label for="monitor-filter">MONITOR</label>
            <input type="checkbox" id="monitor-filter" name="monitor" value="1" <?= isset($_GET['monitor']) && $_GET['monitor'] === '1' ? 'checked' : '' ?>>
            <label for="storage-filter">STORAGE</label>
            <input type="checkbox" id="storage-filter" name="storage" value="1" <?= isset($_GET['storage']) && $_GET['storage'] === '1' ? 'checked' : '' ?>>
            <label for="power-filter">POWER</label>
            <input type="checkbox" id="power-filter" name="power" value="1" <?= isset($_GET['power']) && $_GET['power'] === '1' ? 'checked' : '' ?>>
            <label for="casing-filter">CASING</label>
            <input type="checkbox" id="casing-filter" name="casing" value="1" <?= isset($_GET['casing']) && $_GET['casing'] === '1' ? 'checked' : '' ?>>
        </form>
    
    <div class="products-wrapper">
    <?php endif; ?>
        <?php foreach ($products as $product): ?>
        <a href="index.php?page=product&id=<?= $product['id'] ?>" class="product">
            <img src="imgs/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
            <span class="name"><?= $product['name'] ?></span>
            <span class="price">
                Rs <?= $product['price'] ?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">Rs <?= $product['rrp'] ?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
        <?php if (!$is_ajax): ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=components&p=<?= $current_page - 1 ?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=components&p=<?= $current_page + 1 ?>">Next</a>
        <?php endif; ?>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#filter-form').on('change', 'input[type="checkbox"]', function() {
            if ($(this).is(':checked')) {
            // Uncheck all other checkboxes
            $('#filter-form input[type="checkbox"]').not(this).prop('checked', false);
        }
            
        $('#filter-form').submit();
        });

        $('#filter-form').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            $.ajax({
                url: 'index.php?page=components',
                type: 'GET',
                data: $(this).serialize(), // Serialize form data
                success: function(response) {
                    $('.products-wrapper').html(response); // Update product list with the filtered results
                }
            });
        });
    });
</script>


<script src="./js/nav2.js"></script>
<script src="./js/slider.js"></script>

</body>        

</html>

    <?= template_footer() ?>
<?php endif; ?>
