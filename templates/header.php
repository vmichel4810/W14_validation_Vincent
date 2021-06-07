<header>
    <?php session_start();?>
    <nav>
        <ul>
            <li><a href="./index.php">Accueils</a></li>
            <?php if(isset($_SESSION['login'])): ?><li><a href="./admin.php">admin</a></li><?php endif ?>
            <?php if(empty($_SESSION['login']) && empty($_SESSION['passWord'])):?>
                <li><a href="./connection.php">Connectez-vous</a></li>
                <?php else :?>
            <li><a href="./controller/disconnection.php">Déconnexion</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>