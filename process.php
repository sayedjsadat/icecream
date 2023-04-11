<?php
/*
 * Sayed Jalal Sadat
 * 4/11/2023
 * 328/icecream/process.php
 * order from Ice Cream shop
 */

//Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

// Define constant
define('PRICE_PER_SCOOP', 2.00);
define('SALES_TAX', 0.08);

//Include header
include ('header.html');

?>

<body>
<div class='container'>
    <h1>Thank you for your order!</h1>
    <?php
        //echo"<pre>"
        //var_dump($_POST);
        //echo"</pre>"

        //Get data from POST array
        $numScoops = $_POST['scoops'];
        $cone = $_POST['cone'];
        $flavor = $_POST['flavor'];
        $flavorList = implode(", ", $flavor);

        //Calculate price
        $subtotal = $numScoops * PRICE_PER_SCOOP;
        $total = $subtotal + ($subtotal * SALES_TAX);

        //Display summary
        echo "<p>Number of scoops: $numScoops</p>";
        echo "<p>Cone selection: $cone</p>";
        echo "<p>Flavors: $flavorList</p>";
        echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
        echo "<p>Total: $" . number_format($total, 2) . "</p>"
    ?>
</div>
</body>
