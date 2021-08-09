<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Document</title>
    </head>
    <body>
        <?php 
            require_once('../../config/db_config.inc');
            // var_dump($_POST);
            // var_dump($_FILES);
            if (isset($_FILES['file'])) {
                $tmpName = $_FILES['file']['tmp_name'];
                $name = $_FILES['file']['name'];
                $size = $_FILES['file']['size'];
                $error = $_FILES['file']['error'];

                $tabExtension = explode('.', $name);
                $extension = strtolower(end($tabExtension));

                $extensionAutorisee = ['jpg', 'png', 'gif', 'jpeg'];
                $tailleMax = 40000000;

                if (in_array($extension, $extensionAutorisee) &&  $size <= $tailleMax && $error == 0) {
                    $uniqueName = uniqid('', true);
                    $fileName = $uniqueName.'.'.$extension;
                
                    move_uploaded_file($tmpName, '../../upload/dessins/'.$fileName);

                    $req = $db -> prepare('INSERT INTO portfolio_dessins (name) VALUES (?)');
                    $req -> execute([$fileName]);

                    echo '<p class="">Image enregistrée</p>';
                    
                } else {
                    echo '<p class="">Mauvaise extension ou taille trop importante ou erreur</p>';
                }
            }
            
        ?>

        <div class="form-label">
            <form action="insert_dessins.php" method="POST" enctype="multipart/form-data">
                <label for="file">Fichier</label>
                <input type="file" name="file">
                <button type="submit">Enregistrer</button>
            </form> 
        </div>
        
        <!-- <a href="../index.php">Retour</a> -->
    </body>
</html>