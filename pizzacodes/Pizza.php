<?php

$pizzas = [
    ["name" => "Domino's Pizza", "image" => "https://n4sshh.github.io/EXP/domino.jpg", "description" => "Known for fast delivery and innovative pizza recipes like the Extravaganza and Philly Cheese Steak.", "command" => "dominos"],
    ["name" => "Pizza Hut", "image" => "https://n4sshh.github.io/EXP/pizzahut.png", "description" => "A family favorite, Pizza Hut is famous for its stuffed crust and signature pan pizzas.", "command" => "pizzahut"],
    ["name" => "Papa John's Pizza", "image" => "https://n4sshh.github.io/EXP/papajohn.jpg", "description" => "Better ingredients, better pizza! Papa John’s is loved for its fresh ingredients and garlic butter sauce.", "command" => "papajohns"],
    ["name" => "About Us", "image" => "https://n4sshh.github.io/EXP/BIg4.jpg", "description" => "Meet the passionate team behind Pizza Giants! Click to learn more about us.", "command" => "about"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Giants: Home</title>
  <link rel="stylesheet" href="CSS/pizza.css">
</head>
<body>

  <main class="content">
    <?php foreach ($pizzas as $pizza): ?>
        <div class="pizza-item">
            <img src="<?= htmlspecialchars($pizza['image']) ?>" alt="<?= htmlspecialchars($pizza['name']) ?>" class="logo">
            <div class="details">
                <h2><?= htmlspecialchars($pizza['name']) ?></h2>
                <p><?= htmlspecialchars($pizza['description']) ?></p>
                <a href="index.php?command=<?= htmlspecialchars($pizza['command']) ?>" class="btn">
                    <?= $pizza['command'] === 'about' ? 'Learn More' : 'View Menu' ?>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
  </main>

</body>
</html>
