<?php

// inclure les classes necessaires #endregion

include 'valeur.php';

// inclure l'entête de la page 
include 'header.php';


include 'menu.php';

// function qui va determiné en fonction de choix dans le menu le contenu qui sera inclue.
$x=$_GET['page'];

function contenu($x){
    if($x=== 'index.php'){
        return  'accueil.php';
    }elseif($x === 'photo.php'){
        return "carousel.php";
        }elseif($x === 'reservation.php'){
            return  'text.php';
    }elseif($x === 'lieux.php'){
                return "text.php";
    }elseif($x === 'contact.php'){
        return "form.php";
    }else{
        return "Erreur 404";
    }
};

// inclure le contenu en fonctionde la page.
 include contenu($x);


include 'footer.php';

?>
</body>
</html>
