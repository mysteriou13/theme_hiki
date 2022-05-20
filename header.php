<?php 

global $current_user;

   $hote = $_SERVER['HTTP_HOST']; 

   $protocle = null;

 if ($_SERVER['HTTPS'] == 'on') {

      
   
         $protocle = "https";
         
    } else {
    
     

        $protocle = "http";

    }
      
  $image = $protocle."://".$hote.'/wp-content/themes/theme_hiki/image/';

 $logo = $image.'cropped-petitlogopng.png';

 $image_header = $image.'headerhiki1opti.jpg';

  $style = $protocle."://".$hote."/wp-content/themes/theme_hiki/style.css";

  $hote = $protocle."://".$hote;

  $login_url = $hote."/wp-login.php";

  $index = $hote."/index.php";

  $file =  dirname(__FILE__);

  $pieces = explode("wp-content", $file);

  $login = $file."/formulaire/form_login.php";

  $logout = "wp_logout_url( home_url() ); "; 
  
  $logout_url = wp_logout_url($hote);

   $pieces = explode("wp-content", $file);


?>

<header>

<?php 



$plugins = $pieces[0]."/wp-content/plugins/";

$full_theme_hiki = $plugins."full_theme_bulder/";

$full_sql = $full_theme_hiki."sql.php";

$full_affiche = $full_theme_hiki."affiche.php";

include($full_sql);

include($full_affiche);

$sql = new \data\sql();

$affiche = new \affiche\afficher();

?>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<link href="<?php echo $style ?>" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet"> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

    <li> Pubs Projets de reclus/hiki</li>

    <li id = "category" onclick = "mouseaffichage('#liste_category',this.id)">
      Catégories+
    
      <p >
  
  
</p>

    </li>
    
    <li>F.A.Q.</li>

    <li> Contact</li>

    <?php 

 if(isset($current_user->user_login)){
echo '
    <li>Mon profil</li>
';

}
    ?>
        <li> Inscription </li>

        <li> Membres </li>

   <li> Page officielle Facebook</li>
   
   <?php 
   


   ?>

    <li> Accueil </li>

    


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