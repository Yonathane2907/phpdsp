<?php 
    function Input($size, $name, $label, $type, $placeholder) {
        $un = '<div class="col-md-'.$size.'">
                    <div class="mb-3">';
        $deux = '';
        $trois =  '<input type="'.$type.'" name="'.$name.'" class="form-control" id="'.$name.'" placeholder="'.$placeholder.'">
                    </div>
                </div>';

        if ($type != 'submit') {

            $deux = '<label for="'.$name.'" class="form-label">'.$label.'</label>';
        }

        return $un.$deux.$trois;
         
        
                        
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container bg-warning p-3 mt-5">
            <form class="row" action="result.php" method="get">
                <?php 
                echo Input("4", "nom", "Votre nom", "text", "Entrer un nom");
                echo Input("4", "prenom", "Votre prenom", "text", "Entrer un prenom");
                echo Input("4", "email", "Votre email", "email", "Entrer un email");
                echo Input("4", "telephone", "Votre téléphone", "tel", "Entrer un téléphone");
                echo Input("4", "password", "Votre mot de passe", "password", "Entrer un mot de passe");
                echo Input("4", "password2", "Votre confirmation de mot de passe", "password", "Entrer un mot de passe");
                echo Input("4", "Envoyer", "Envoyer", "submit", "");
                ?>
            </form>
    </div>    
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>