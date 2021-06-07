<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/admin.css">
    <title>Accueil</title>
</head>
<body>
    <?php include"templates/header.php"; ?>

    <main>
        <?php if(isset($_SESSION['login'])): ?>
        <div id="adminChoice">
            <div>
                <h1>Veuillez choisir le/les pays</h1>
            </div>
            <div id="choice">
                <form action="./controller/adminControl.php" method="post">
                    
                    <div>
                        <input type="checkbox" name="french" id="french" <?php if(isset($_SESSION['french'])){ echo "checked";} ?> />
                        <label for="french">France</label>
                    </div>
                    <div>
                        <input type="checkbox" name="italy" id="italy" <?php if(isset($_SESSION['italy'])){ echo "checked";} ?> />
                        <label for="italy">Italie</label>
                    </div>
                    <div>
                        <input type="checkbox" name="swiss" id="swiss" <?php if(isset($_SESSION['swiss'])){ echo "checked";} ?> />
                        <label for="swiss">Suisse</label>
                    </div>
                    <div>
                        <input type="submit" value="validez" class="validez">
                    </div>
                    
                </form>
            </div>
        </div>
        <?php else : ?>
        <?php endif ?>
        <div class="mountain">
            <?php if(isset($_SESSION['french'])): ?>
            <div class="card french">
                <img src="./img/montBlanc.jpg" alt="Mont Blanc" height="150px" width="150px" class="mtBlancF">
                <p>Le plus haut sommet de France est le Mont Blanc qui culmine a 4810 m</p>
            </div>
            <?php endif ?>
            <?php if(isset($_SESSION['italy'])): ?>
            <div class="card italy">
                <img src="./img/montBlanc.jpg" alt="Mont Blanc" height="150px" width="150px" class="mtBlancI">
                <p>Le plus haut sommet d'Italie est le Mont Blanc qui culmine a 4810 m</p>
            </div>
            <?php endif ?>
            <?php if(isset($_SESSION['swiss'])): ?>
            <div class="card Swiss">
                <img src="./img/montRose.JPG" alt="Mont Blanc" height="150px" width="150px" class="mtRoseS">
                <p>Le plus haut sommet de Suisse est le Mont Rose qui culmine a 4634 m</p>
            </div>
            <?php endif ?>
        </div>
    </main>
    
    <?php include"templates/footer.php"; ?>
    <script src="" defer></script>
</body>
</html>