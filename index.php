<?php
include("cart.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="icon" type="image" href="images/cart.png"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
    <header id="header">
        <h1>The Robinhood Shopping Cart</h1>
    </header>
    
    <div id="main_div">  
        <h3>Shopping Cart</h3>
        <div id="section_div">
            <section id="main_section">
            <?php
            displayCart();
            ?>
            </section>
            <aside id="main_aside">
                <span class="yourCart">Your Cart</span>&nbsp;
                    <img src="images/cart.png" height="50" width="80"/><br/><br/>
                    <?php
                    product();
                    ?>
            </aside>
        </div>
    </div>
</body>
</html>