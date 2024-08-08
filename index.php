
<!DOCTYPE html>
<html lang="sv">
<head>
    <?php
        include "head.php";
    ?>
    <title>Start | Bloggsidan.</title>
</head>
<body>
<header>
    <?php
        include "navigation.php";
    ?>
</header>
<main>
    <nav class="blogs" >
        <?php
            include "menu.php";
        ?>
    </nav>
    <section class="content">
        <?php
            include "content.php";
        ?>
    </section>
    <aside class="info">
        <?php
            include "info.php";
        ?>
    </aside>
</main>
<?php
    include "footer.php";
?>
</body>
</html>