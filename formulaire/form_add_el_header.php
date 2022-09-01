<form action = "./?type_form=insert_header" method = "POST">
formulaire de creation de lien pour le menu de navigation
<div>

<div >

<div class = "d-flex">

<div>
  <label> nom du lien </label> 
</div>

  <div>

 <input name = "name_text" type = "text">

</div>


</div>


<div class = "d-flex">

<div> lien vers la page</div>

<div>
  <?php 

$affiche->menu_liste_post();




?>
</div>

</div>

</div>


</div>

<div>

<div class = "d-flex">

<div>
<label> visible que pour les membre</label>
</div>

<div>
  oui <input  name = "membre_true" type = "checkbox">
</div>

<div>
  non <input name  = "membre_false" type = "checkbox">
</div>


</div>


</div>

<div class  = "d-flex">

<div>
<label> visible que pour les admin </label>
</div>


<div>
  oui <input name =  "admin_true" type = "checkbox">
</div>

<div>
  non <input name = "admin_false" type = "checkbox">
</div>

</div>

<input type  = "submit" value = "envoyer">

<?php

if(isset($_GET['type_form'])){



$admin = null;

if(isset($_POST['admin_true'])  && !empty($_POST['admin_true'])){

  $admin = $_POST['admin_true'];

}

if(isset($_POST['admin_false'])  && !empty($_POST['admin_false'])){

  $admin = $_POST['admin_false'];

}


$membre = null;

if(isset($_POST['membre_true'])  && !empty($_POST['membre_true'])){

  $membre = $_POST['membre_true'];

}

if(isset($_POST['membre_false'])  && !empty($_POST['membre_false'])){

  $membre = $_POST['membre_false'];

}

$menu_header->add_el_header($_POST['name_text'],$_POST['select_link'],$admin,$membre);

}
?>

</form>