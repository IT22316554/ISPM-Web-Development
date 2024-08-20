<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <?php
        $welcomeMessage = "Welcome to My Website!";
    ?>
    <header>
        <h1><?php echo $welcomeMessage; ?></h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <section>
        <p>This is the home page of the website. You can put any content here.</p>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Website</p>
    </footer>
</body>
</html>
