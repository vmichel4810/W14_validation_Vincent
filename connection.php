<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>connexion</title>
</head>
<body>
    <?php include"templates/header.php"; ?>

    <main class="connection">
        <form action="controller/session.php" method="post" class="formC">
            <div class="conect">
                <label for="login">Identifiant : </label>
                <input type="text" name="login" required>
            </div>
            <div class="conect">
                <label for="password">Mot de passe : </label>
                <input type="password" name="passWord" required>
            </div>
            <?php if(isset($_GET['error'])) : ?>
            <div class="conect red">
                <p>Votre Login ou Mot de passe est incorrect</p>
            </div>
            <?php endif ?>
            <div class="conect">
                <input type="submit" name="submit" value="connexion">
            </div>
        </form>
    
    </main>
    
    <?php include"templates/footer.php"; ?>
</body>
</html>