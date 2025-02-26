<?php
$pizzas = [
    ["name" => "Extravaganza", "price" => 499, "ingredients" => "Pepperoni, ham, beef, onions, mushrooms", "image" => "https://n4sshh.github.io/EXP/extravaganza.jpg"],
    ["name" => "Philly Cheese Steak", "price" => 549, "ingredients" => "Steak, cheese, onions, green peppers", "image" => "https://n4sshh.github.io/EXP/philly.jpg"],
    ["name" => "Meatzza", "price" => 529, "ingredients" => "Beef, ham, sausage, pepperoni", "image" => "https://n4sshh.github.io/EXP/meatzza.jpg"],
    ["name" => "Deluxe", "price" => 489, "ingredients" => "Pepperoni, mushrooms, onions, green peppers", "image" => "https://n4sshh.github.io/EXP/deluxe.jpg"],
    ["name" => "Hawaiian", "price" => 479, "ingredients" => "Ham, pineapple, mozzarella", "image" => "https://n4sshh.github.io/EXP/hawaiian.jpg"],
    ["name" => "BBQ Chicken", "price" => 509, "ingredients" => "Chicken, BBQ sauce, onions, cheddar cheese", "image" => "https://n4sshh.github.io/EXP/bbqchicken.jpg"],
    ["name" => "Pepperoni Feast", "price" => 519, "ingredients" => "Double pepperoni, extra cheese", "image" => "https://n4sshh.github.io/EXP/pepperoni.jpg"],
    ["name" => "Veggie Lovers", "price" => 489, "ingredients" => "Mushrooms, onions, bell peppers, olives", "image" => "https://n4sshh.github.io/EXP/veggie.jpg"],
    ["name" => "Buffalo Chicken", "price" => 529, "ingredients" => "Chicken, buffalo sauce, ranch", "image" => "https://n4sshh.github.io/EXP/buffalo.jpg"],
    ["name" => "Four Cheese", "price" => 499, "ingredients" => "Mozzarella, cheddar, parmesan, provolone", "image" => "https://n4sshh.github.io/EXP/fourcheese.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domino's Pizza Menu</title>
    <link rel="stylesheet" href="CSS/pizza.css">
</head>
<body>

    <main class="content">
        <?php foreach ($pizzas as $pizza): ?>
            <div class="pizza-item">
                <img src="<?= htmlspecialchars($pizza['image']) ?>" alt="<?= htmlspecialchars($pizza['name']) ?>" class="logo">
                <div class="details">
                    <h2><?= htmlspecialchars($pizza['name']) ?></h2>
                    <p>Price: ₱<?= number_format($pizza['price']) ?></p>
                    <p>Ingredients: <?= htmlspecialchars($pizza['ingredients']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <!-- Order Form -->
    <section class="order-form">
        <h2>Place Your Order</h2>
        <form action="process_order.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="pizza">Select Pizza:</label>
            <select id="pizza" name="pizza">
                <?php foreach ($pizzas as $pizza): ?>
                    <option value="<?= htmlspecialchars($pizza['name']) ?>"><?= htmlspecialchars($pizza['name']) ?> - ₱<?= number_format($pizza['price']) ?></option>
                <?php endforeach; ?>
            </select>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <label for="address">Delivery Address:</label>
            <textarea id="address" name="address" required></textarea>

            <button type="submit">Submit Order</button>
        </form>
    </section>

</body>
</html>
