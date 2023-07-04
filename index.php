
<!DOCTYPE html>

<html lang = "fr">

<?php 

$file =  dirname(__FILE__);

include($file."/header.php");

?>


<body>

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



<div>

<div class =  "position-titre">

<h1 > <div class = "titre-header"> Bienvenue sur Hikikomori-France </div> </h1>

<div class = "sous-titre-header">

Site regroupant les hikikomori ainsi que les reclus sociaux, les asociaux, tout ceux qui ne s’intègrent pas dans la société

</div>

</div>



<div class = "text-light">



<div  class = "mainboxcontent">

<div class = "aside">
    
<div>
    
    <?php
    
    $aside->affiche_aside();

    ?>

    </div>

    

</div>

<div class = "position_text text-light" >

<?php



// Vérifier si c'est une catégorie
if (is_category()) {

    
     echo $affiche->category_post($post_id);

}else {
    // Catégorie non trouvée
   
}

    
if (is_single()) {


    $billet = get_post(htmlspecialchars($_GET['p']));
    $title = $billet->post_title;
	$date = $billet->post_date;
	$contenu = $billet->post_content;
	$contenu = apply_filters('the_content', $contenu);
	$contenu = str_replace(']]>', ']]>', $contenu);

  require($file."/template/billet.php");

} else {
    
}


/* affichage all post dans la page d'acceui*/

if (is_front_page()) {

$affiche->affiche_liste_post();

}

if(isset($_GET['login']) && !empty($_GET['login'])){

    $login = $full_theme_hiki."/template/".htmlspecialchars($_GET['login'].".php");


    if(file_exists($login)){

    require($full_theme_hiki."/template/".htmlspecialchars($_GET['login'].".php"));

    }

   
}
?>

</div></div>
<?php
require_once("footer.php");

?>

</body>
</html>