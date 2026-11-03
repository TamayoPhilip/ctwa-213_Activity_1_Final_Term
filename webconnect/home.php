
<?php

session_start();

if (!isset($_SESSION["user_id"])) {

    header("Location: index.php");
    exit;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WebConnect - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>UWU</h1>

    <h2>Welcome!</h2>

    <p>
        Hello,
        <?php echo htmlspecialchars($_SESSION["fullname"]); ?>!
    </p>

    <p>You have successfully logged in.</p>

    <!-- MEME PICTURE -->
    

    <img src="images/meme.jpg"
         alt="My Meme Picture"
         width="300">

    <p>sorry maam design lang</p>

    <a href="logout.php">
        <button type="button">Logout</button>
    </a>

</div>

</body>
</html>
