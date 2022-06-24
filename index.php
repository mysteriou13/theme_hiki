
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


if(!isset($_GET['cat']) && !isset($_GET['p'])){

$affiche->affiche_liste_post();

}

if(isset($_GET['cat'])){
        
    echo $affiche->category_post($_GET['cat']);
}

if(isset($_GET['p']) && !empty($_GET['p'])){
    
    $billet = get_post(htmlspecialchars($_GET['p']));
    $title = $billet->post_title;
	$date = $billet->post_date;
	$contenu = $billet->post_content;
	$contenu = apply_filters('the_content', $contenu);
	$contenu = str_replace(']]>', ']]>', $contenu);
	
}


?>

<div id="billet">

<?php 
	
	 $url = wp_get_attachment_url( get_post_thumbnail_id(htmlspecialchars($_GET['p'])), 'thumbnail' );
    

	
	$u = explode("uploads",$url);



     $u = site_url()."/wp-content/uploads".$u[1];



	?>

<div style = 'width:30vh; height:30vh'>

	<?php
	echo "<img  style = 'object-fit:cover; width:100%; height:100%;' src= ".$u.">"; 
  
	?>

</div>

	<?php

	echo "<h1>$title</h1><p>$contenu</p><strong>$date</strong>"; 

	?>

</div>

</div>


</div>


</div>


 
</div>


</div>




</div>






</body>
</html>