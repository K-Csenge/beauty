<?php
session_start();
if(!isset($_SESSION['page'])){
    $_SESSION['page'] = "index";
}
?>

<nav class="nav">
    <ul>
        <?php if ($_SESSION['page'] != "index") { ?>
            <li>
                <a href="index.php">Főoldal</a>
            </li>
        <?php } ?>
        <?php if ($_SESSION['page'] != "aboutus") { ?>
            <li>
                <a href="rolunk.php">Rólunk</a>
            </li>
        <?php } ?>
        <?php if ($_SESSION['page'] != "contact") { ?>
            <li>
                <a href="kontakt.php">Kontakt</a>
            </li>
        <?php } ?>
        <?php if (!isset($_SESSION['id'])) { ?>
            <?php if ($_SESSION['page'] != "login") { ?>
                <li>
                    <a href="bejel.php">Bejelentkezés</a>
                </li>
            <?php } ?>
            <?php if ($_SESSION['page'] != "register") { ?>
                <li>
                    <a href="regi.php">Regisztráció</a>
                </li>
            <?php } ?>
        <?php } ?>
        <?php if ($_SESSION['page'] != "about") { ?>
            <li>
                <a href="about.php">About</a>
            </li>
        <?php } ?>

        <?php if (isset($_SESSION['id'])) { ?>
            <li>
                <a href="profile.php">Profilom</a>
            </li>
        <?php } ?>
        <?php if (isset($_SESSION['admin'])) { ?>
            <li>
                <a href="admin.php">Admin</a>
            </li>
        <?php } ?>
        <?php if (isset($_SESSION['id'])) { ?>
            <li>
                <a href="kijel.php">Kijelentkezés</a>
            </li>
        <?php } ?>
    </ul>
</nav>