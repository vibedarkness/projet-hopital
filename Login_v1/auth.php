<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="css/styl.css" media="screen" type="text/css" />
    </head>
    <body>
        <div class="login">
        <h1 class="login-header">Authentification</h1>
            <form action="verification.php" method="POST" class="login-container">
                
                <p><input type="text" placeholder="code" name="username" ></p>
    
                <p><input type="password" placeholder="password" name="password" ></p>

                <p><input type="submit" id='submit' value='LOGIN' ></p>
                <?php
                session_start();
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1){
                        echo "<p style='color:white'>Utilisateur ou mot de passe incorrect</p>";
                    }
                    elseif($err==2){
                        echo "<p style='color:white'>Veillez remplir les champs</p>";
                    }
                    elseif($err=3){
                        echo "<p style='color : white;'>Veillez d'abord vous connectez </p>";
                    }
                }
                ?>
            </form>
        </div>
    </body>
</html>