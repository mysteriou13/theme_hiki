<?php 

global $current_user;

   $hote = $_SERVER['HTTP_HOST']; 

   $protocle = null;

 if ($_SERVER['HTTPS'] == 'on') {

      
   
         $protocle = "https";
         
    } else {
    
     

        $protocle = "http";

    }
      
  $style = $protocle."://".$hote."/wp-content/themes/theme_hiki/style.css";

  $hote = $protocle."://".$hote;

  $login_url = $hote."/wp-login.php";

  $index = $hote."/index.php";

  $file =  dirname(__FILE__);

  $pieces = explode("wp-content", $file);

  $login = $file."/formulaire/form_login.php";

  $logout = "wp_logout_url( home_url() ); "; 
  
  $logout_url = wp_logout_url($hote);

      $file =  dirname(__FILE__);

    $pieces = explode("wp-content", $file);

    $javascript = $protocle."://".$hote."/wp-content/themes/theme_hiki/javascript/mouseaffiche.js";


    $js =  $protocle."://".$hote."/wp-content/themes/theme_hiki/javascript/mouseaffiche.js";

?>

<header>

<?php 



$plugins = $pieces[0]."/wp-content/plugins/";

$full_theme_hiki = $plugins."full_theme_bulder/";

$full_sql = $full_theme_hiki."sql.php";

include($full_sql);

$sql = new \data\sql();




?>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<link href="<?php echo $style ?>" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet"> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script id = "myScript" src = "<?php echo $js; ?>">  </script>

</head>

<div>

<div class = "d-flex  justify-content-between">

<div>

<img src="https://hikikomori-france.fr/wp-content/uploads/2019/06/cropped-petitlogopng.png" class="  custom-logo" alt="Hikikomori France" width="48" height="48">

</div>

<nav> 

<ul class = "d-flex  justify-content-around">

    <li> Pubs Projets de reclus/hiki</li>

    <li id = "category" onmouseover = '$("#liste_category").show();' onmouseout = '$("#liste_category").hide();'>
      Catégories
    
      <p id  = "liste_category" class = "category">
      <?php 
    
    $sql->liste_category();

      ?>
  
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

<div>
<img src="https://hikikomori-france.fr/wp-content/uploads/2020/06/headerhiki1opti.jpg" class="header-image" alt="" >
</div>