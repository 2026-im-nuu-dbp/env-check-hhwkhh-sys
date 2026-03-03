<?php
// A simple about page for the demo site
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Demo Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>About This Demo</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
        </nav>
    </header>
    <main>
        <p>This is a minimal demo website built with PHP. It shows how to structure a basic site and use simple PHP for dynamic content.</p>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Demo Site</p>
    </footer>
</body>
</html>
