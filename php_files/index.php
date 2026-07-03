<!DOCTYPE html>
<html>
<head>
    <title>Baristro</title>
</head>

<header>
    <h1 id="Welcome">Welcome to Baristro, How can We take your order!</h1>

    <link rel="stylesheet" href="form_stylesheet.css">

</header>

<body>
    <main class="content-grid">

    <section class="panel">

   
        <form action="./process_order.php" method="post">

            <div class="Inputs">

                <label for="cn">Customer Name: </label>
                <input type="text" name="Customer Name" id="cn"  size="30"/>


                <label for="desrt">Dessert: </label>
                <select id="desrt" name="Dessert">
                    <option>Select One...</option>
                    <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
                    <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?>>Chocolate Cake</option>
                    <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?>>Tiramisu</option>
                    <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?>>Carrot Cake</option>
                    <option value="Vanilla Milkshake" <?= dessertSelected("Vanilla Milkshake"); ?>>Vanilla Milkshake</option>

                </select>

                <label for="dn">Drinks: </label>
                <select id="dn" name="drinks">
                    <option>Select One...</option>
                    <option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
                    <option value="Chocolate Milk" <?= drinkSelected("Chocolate Milk"); ?>>Chocolate Milk</option>
                    <option value="Boba" <?= drinkSelected("Boba"); ?>>Boba</option>
                    <option value="Tea" <?= drinkSelected("Tea"); ?>>Tea</option>
                    <option value="Milk" <?= drinkSelected("Milk"); ?>>Milk</option>
                    <option value="Juice" <?= drinkSelected("Juice"); ?>>Juice</option>
                    <option value="Root Beer" <?= drinkSelected("Root Beer"); ?>>Root Beer</option>
                </select>

                <label for="ds">Drink Size: </label>
                <select id="ds" name="drinkSize">
                    <option>Select One...</option>
                    <option value="Small" <?= drinkSizeSelected("Small")?>>Small</option>
                    <option value="Medium" <?= drinkSizeSelected("Medium")?>>Medium</option>
                    <option value="Large" <?= drinkSizeSelected("Large")?>>Large</option>
                </select>

            </div>
    


        </form>
    </section>

    </main>
</body>
</html>