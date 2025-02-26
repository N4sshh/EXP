<?php
$pizzas = [
    ["name" => "Supreme", "price" => 499, "ingredients" => "Pepperoni, sausage, mushrooms, bell peppers", "image" => "https://n4sshh.github.io/EXP/supreme.jpg"],
    ["name" => "Meat Lover's", "price" => 549, "ingredients" => "Pepperoni, ham, beef, sausage, bacon", "image" => "https://n4sshh.github.io/EXP/meatlovers.jpg"],
    ["name" => "Pepperoni Lover's", "price" => 529, "ingredients" => "Extra pepperoni, extra cheese", "image" => "https://n4sshh.github.io/EXP/pepperonilovers.jpg"],
    ["name" => "BBQ Chicken", "price" => 489, "ingredients" => "Grilled chicken, BBQ sauce, onions, cheese", "image" => "https://n4sshh.github.io/EXP/pizzahutbbq.jpg"],
    ["name" => "Veggie Lover's", "price" => 479, "ingredients" => "Tomatoes, onions, green peppers, mushrooms", "image" => "https://n4sshh.github.io/EXP/veggielovers.jpg"],
    ["name" => "Cheese Pizza", "price" => 459, "ingredients" => "Mozzarella, provolone, parmesan", "image" => "https://n4sshh.github.io/EXP/cheesepizza.jpg"],
    ["name" => "Hawaiian Pizza", "price" => 499, "ingredients" => "Ham, pineapple, mozzarella", "image" => "https://n4sshh.github.io/EXP/hawaiian.jpg"],
    ["name" => "Buffalo Chicken", "price" => 519, "ingredients" => "Buffalo chicken, ranch sauce, onions", "image" => "https://n4sshh.github.io/EXP/buffalochicken.jpg"],
    ["name" => "Margarita Pizza", "price" => 479, "ingredients" => "Tomato sauce, mozzarella, basil", "image" => "https://n4sshh.github.io/EXP/margarita.jpg"],
    ["name" => "Four Cheese", "price" => 529, "ingredients" => "Mozzarella, cheddar, provolone, parmesan", "image" => "https://n4sshh.github.io/EXP/fourcheese.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Hut Menu</title>
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
