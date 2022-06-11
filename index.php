
<!DOCTYPE html>

<html lang = "fr">

<?php 

$file =  dirname(__FILE__);

include($file."/header.php");

?>


<body >

<?php 

/*
Theme Name: theme_hiki
Theme URI: https://hikikomori-france.fr/
Author: massa anthony
Author URI: https://www.monsite.com/monsite
Description:  theme du site hikikomori_france
Version: 1.0
*/

?>

<div id = "main">


<div class = "d-flex ">

<div class = "div_link">
    lien
</div>

<div  class = "position_text">

<h1>  Bienvenue sur Hikikomori-France  </h1>

<div class = "color_text">

Site regroupant les hikikomori ainsi que les reclus sociaux, les asociaux, tout ceux qui ne s’intègrent pas dans la société

</div>



<div class = "text-light">

<?php


if(!isset($_GET['cat']) ){

$affiche->affiche_liste_post();

}

?>
</div>


 
</div>


</div>




</div>






</body>
</html>