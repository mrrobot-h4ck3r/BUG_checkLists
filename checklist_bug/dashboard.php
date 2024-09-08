<?php
include 'includes/config.php';
include 'includes/db.php';

if (!isLoggedIn()) {
    redirect('login.php');
}

// Fetch checklist items, categories, etc.
$stmt = $pdo->query('SELECT * FROM checklist_items');
$items = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <h1>Dashboard</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <section>
            <h2>Your Checklists</h2>
            <ul>
                <?php foreach ($items as $item): ?>
                    <li>
                        <?php echo htmlspecialchars($item['name']); ?>
                        <!-- Add more details or actions here -->
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
</body>
</html>
