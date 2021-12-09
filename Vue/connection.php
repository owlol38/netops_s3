<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Connexion</title>
        </head>
        <body>
            <style>
                body{
                    background-color : #F7F2EA;
                }
            </style>
        <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Password ou pseudo inconnu !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Password ou pseudo inconnu !
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="../Controller/connection.php" method="post" id="myform">
                <fieldset>
                <img src="../logoOwnart.png" style="border-radius:0px; text-align: center; margin: auto; display:flex;">
                    <h2 class="text-center">Connexion</h2>       
                    <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" id="pseudo">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" id="password">
                    </div>
                    <span id="error"> </span><br>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                    </div>  
            </form>
            <script>
                <?php  
                    include_once("script_connexion.js");
                ?>
            </script>
            <p class="text-center"><a href="inscription.php">Inscription</a></p>
        </div>
        <style>
            .login-form {
                width: 500px;
                margin: 100px auto;

            }
            .login-form form {
                border : solid 4px #F7F2EA;
                margin-bottom: 35px;
                background: #690C07;
                border-radius: 10px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 40px;
                color: #D3B688;
            }
            .form-control, .btn {
                min-height: 45px;
                border-radius: 4px;
                background: #F7F2EA;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
                color: #690C07;
            }
        </style>
            </fieldset> 
        </body>
</html>