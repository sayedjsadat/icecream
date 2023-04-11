<?php
/*
 * Sayed Jalal Sadat
 * 4/11/2023
 * 328/icecream/index.php
 * order from Ice Cream shop
 */

//Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

// Define array
$flavors = array("vanilla", "chocolate", "strawberry", "caramel");
$cones = array("sugar"=>"Sugar Cone", "waffle"=>"Waffle Cone", "cup"=>"Cup",
    "choc"=>"Chocolate Dipped Waffle Cone");

$title = "Order Form";
include ('header.html');

?>

<body>
    <div class="container">
    <h1>Welcome to my Ice Cream Shoppe!</h1>
    <form action="process.php" method="post">

        <h3>Choose a flavor</h3>

        <?php
            foreach ($flavors as $flavor) {
                echo "<label><input type='checkbox' name='flavor[]' value='$flavor'> " .
                ucfirst($flavor) . "</label><br>";
            }
       ?>
        
        <h3>Choose One</h3>
        <?php
        foreach ($cones as $value=>$label){
            echo "<label><input type='radio' name='flavor[]' value='$value'> $label</label><br>";
        }
        ?>

        <h3>How many scoops?</h3>
        <input type="text" name="scoops" ><br>

        <br>
        <button type="submit">Place Order</button>
    </form>
    </div>
</body>
</html>
