<?php 

global $wpdb;

global $current_user;


  $image = site_url().'/wp-content/themes/theme_hiki/image/';

 $logo = $image.'cropped-petitlogopng.png';

 $image_header = $image.'headerhiki1opti.jpg';

  $style = site_url()."/wp-content/themes/theme_hiki/style.css";

  $login_url = site_url()."/wp-login.php";

  $index = site_url()."/index.php";

  echo $file =  dirname(__FILE__);

  $pieces = explode("wp-content", $file);

  $login = $file."/formulaire/form_login.php";

  $logout = "wp_logout_url( home_url() ); "; 
  
  $logout_url = wp_logout_url($logout);

   $pieces = explode("wp-content", $file);
   
   $plugins = $pieces[0]."/wp-content/plugins/";

   $full_theme_hiki = $plugins."full_theme_bulder/";

   $full_sql = $full_theme_hiki."sql.php";
   
   $full_affiche = $full_theme_hiki."affiche.php";

   $menu_header = $full_theme_hiki."header.php";

   $forget_pass = site_url()."/?login=forgot_login";
   
   require_once $full_sql;
   
   require_once $full_affiche;
   
   require_once $menu_header;

   require_once $full_theme_hiki."/mail.php";

   require_once $full_theme_hiki."/template.php";

  
   $sql = new \data\sql();
   
   $affiche = new \affiche\afficher();

   $menu_header = new \menu_header\menu_header();
   
   $mail = new \mails\mail(true);

   $template = new \template\template;


?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class = "text-light">
<script type="text/javascript">


<?php 

require_once($full_theme_hiki."./js/form_inscription.js");


?>

</script>

<?php if(current_user_can('administrator')) { ?>
  <?php 
    
    $affiche->afficher_el_header();

    ?>

<div>


<div>

<div id = "add_link_nav"   onclick = "mouseaffichage('#form_nav_link',this.id,'ajouter un lien+',' ajouter un lien-')">
ajouter un lien +
</div>

<div id = "form_nav_link"  style = "display:none">

<?php 

include("./wp-content/themes/theme_hiki/formulaire/form_add_el_header.php");

?>

</div>

</div>

</div>

    <?php } ?>

</div>

<div class =  "text-light">


</div>

<header>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<link href="<?php echo $style ?>" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet"> 

<style>
  <?php 
  
  include_once($full_theme_hiki."/style.css");
  
  
  ?>
  </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script id = "myScript" >  

<?php 

include($file."/javascript/mouseaffiche.js");

?>

</script>



</head>

<div>

<div class = "d-flex  justify-content-between">

<div>

<img src= <?php echo $logo ?> class="  custom-logo" alt="Hikikomori France" width="48" height="48">

</div>

<nav> 

<ul class = "d-flex  justify-content-around">

    <li> <a href = "./?login=pub"> Pubs Projets de reclus/hiki </a> </li>

    <li id = "category" onclick = "mouseaffichage('#liste_category',this.id,'Catégories+',' Catégorie-')">
      Catégories+
    
      <p >
  
  
</p>

    </li>
    
    <li> <a href = "./?login=faq"> F.A.Q. </a> </li>

    <li class = "link_nav"> <a href = "./?login=contact" class = "link_nav"> Contact </a> </li>

    <?php 

 if(isset($current_user->user_login)){
echo '
    <li>Mon profil</li>
';

}
    ?>
        <li> <a href = "./?login=inscription"> Inscription </a> </li>

        <li> <a href = "./?login=membre"> Membres </a> </li>

   <li> Page officielle Facebook</li>
   
   <?php 
   


   ?>

    <li> <a href = "./"> Accueil </a> </li>

    


    <?php 

if(isset($current_user->user_login)){
  
  
  echo '
<li>

  <a  class = "link-light" href="';
  
   echo wp_logout_url( home_url() );

  
  echo '

  " title="Logout"> deconnection</a>

</li>
  ';


}

       ?>
</ul>
</nav>

</div>


<?php 


if(!isset($current_user->user_login)){

include($login);

}


?>


</div>



</header>

<div  style = "background-image: url('<?php echo $image_header?>'); background-repeat: no-repeat; height:44vh

">


<div id  = "liste_category" class = "category" >

<?php 

wp_list_categories("title_li=");



?>

</div>


</div>