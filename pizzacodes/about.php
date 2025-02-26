<?php

$team_members = [
    [
        "name" => "Tresha Marie Laranja",
        "image" => "https://n4sshh.github.io/EXP/Tresha.jpg",
        "role" => "Founder & Pizza Enthusiast",
        "description" => "5'2 ang height pero asta lg kmi friends. Friendly, buot, talkative dependi sa mood, people pleaser HAHAHAH sporty."
    ],
    [
        "name" => "Angel Rose Cabogcabog",
        "image" => "https://n4sshh.github.io/EXP/angel.jpg",
        "role" => "Content Creator",
        "description" => "4'11 ang height, family-oriented, NBSB. Taga Zarraga pero never nagkaon PANTAT. Mabuot, masaligan, friendly, pisan pagid kuno."
    ],
    [
        "name" => "Athena Greece Hautea",
        "image" => "https://n4sshh.github.io/EXP/Athena.jpg",
        "role" => "Web Developer",
        "description" => "From Lemery. Weight 55😭, height 5 flat eyy hahah. Second daughter, mapisan, mabinuligon kag d bugalon eeyyy (may pagka pala hubog)."
    ],
    [
        "name" => "Kate Ashley Pantua",
        "image" => "https://n4sshh.github.io/EXP/ASh.jpg",
        "role" => "Marketing Specialist",
        "description" => "Ashley gali indi man tama ka gwapa, pero masaligan sa tanan. Responsible, isa ako sa gabantay pizza sa Akon tito. Nanay’s girl, hipuson, friendly, food lover. #Binimaloy (if you want pizza just call me or text me) masaligan sa tyanggi."
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Giants: About Us</title>
  <link rel="stylesheet" href="CSS/aboutus.css">
</head>
<body>

  <!-- Include Header -->
  <?php include_once('HeadFoot/header.php'); ?>

  <!-- Main Content: About Us -->
  <main class="content">
    <h1>About Pizza Giants</h1>
    <p>Meet the team behind Pizza Giants! We’re passionate about pizza and committed to bringing you the best comparisons of major pizza chains.</p>
    
    <div class="team-container">
        <?php foreach ($team_members as $member): ?>
            <div class="team-member">
                <img src="<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" class="team-photo">
                <div class="details">
                    <h2><?= htmlspecialchars($member['name']) ?></h2>
                    <p><strong><?= htmlspecialchars($member['role']) ?></strong></p>
                    <p><?= htmlspecialchars($member['description']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  </main>

  <!-- Include Footer -->
  <?php include_once('HeadFoot/footer.php'); ?>

</body>
</html>
