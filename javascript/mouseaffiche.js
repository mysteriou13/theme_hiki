
function mouseaffichage(id,idtext){

    var display =  $(id).css("display");

    if(display!="none")
    {

        $("#"+idtext).text("Catégories+");

        $(id).attr("style", "display:none");

    }else{

        $("#"+idtext).text("Catégories-");

        $(id).attr("style", "display:block");

    }

}