<footer>


<div class = "box_footer">

<div class = "text-light div_footer">mention légal</div>

<div class = "text-light div_footer"> qui somme nous ? </div>

<div class = "text-light div_footer"> nous contacter  </div>

</div>

<?php 

require_once($full_theme_hiki."/js/main_js.php");

require_once($full_theme_hiki."/js/main_js.php");

?>

<script>

var allwidthscreen = screen.width; 

var newwidth = (allwidthscreen * 95) / 100;

var cardwidth = (allwidthscreen * 70) / 100;

var catid = "#liste_category";

if(screen.width <= 800){

 catid = "#mobilecat";

}




    let params = new URLSearchParams(document.location.search);
   let name = params.get("p");

   let cat = params.get("cat");

    console.log(name);
    
    if(name == null && cat == null){

        if(sreen.width >400){

        $(".aside").width('72%');

        }

    }

    if(screen.width <= 400){

        $(".aside").width('94%');

    }


    $("#mainbox").width('94%');
    

    </script>

</footer>