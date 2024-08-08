<!DOCTYPE html>
<html lang="sv">
<head>
    <?php
    include "head.php";
    ?>
    <title>Logga in | Bloggsidan.</title>
</head>
<body>
<header id="login-header">
    <nav class="primary-nav">
        <a href="index.php" id="logo">Bloggsidan.</a>
    </nav>
</header>
<main id="sign-in-page">
    <form action="/" id="login-form">
        <h1>Logga in</h1>
        <ul>
            <li>
                <label for="username">Användarnamn</label>
                <input type="text" name="username" id="username" placeholder="Ditt användarnamn" required>
                <span class="errorMessage"></span>
            </li>
            <li>
                <label for="password">Lösenord</label>
                <input type="text" name="password" id="password" minlength="6" placeholder="Ditt lösenord" required>
                <span class="errorMessage"></span>
            </li>
            <li>
                <button id="login" name="login">Logga in</button>
            </li>
        </ul>
    </form>
</main>
<?php
include "footer.php";
?>
</body>
</html>
