<footer id = "footer">

<div class = "d-flex justify-content-around">

<div class = "text-light">mention légal</div>

<div class = "text-light"> qui somme nous ? </div>

<div class = "text-light"> nous contacter  </div>

</div>

<?php 

include($full_theme_hiki."/js/main_js.php");

?>

<script>

var allwidthscreen = screen.width; 

var newwidth = (allwidthscreen * 95) / 100;

var cardwidth = (allwidthscreen * 70) / 100;

    $("#footer").css("width", newwidth);


    let params = new URLSearchParams(document.location.search);
   let name = params.get("p");

    console.log(name);
    
    if(name == null){

        $(".aside").width('72%');

    }


    $("#mainbox").width('94%');
    

    </script>

</footer>