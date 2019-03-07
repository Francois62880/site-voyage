<?php
function menu(){
$menu = array("accueil" => "index.php",
"photo" => "photo.php",
"lieux important" => "lieux.php",
"reservation" => "reservation.php",
"contact" => "contact.php");


foreach($menu as $k => $v){
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="?page='.$v.'">'.$k.'<span class="sr-only">(current)</span></a>';
        echo '</li>';
}
}
?>

<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" id="nav1">Gruissan</a>
<button class="navbar-toggler bg-light" id="button" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav" id="nav">
        <?php  menu() ?>
            </ul>
</div>
</nav>

