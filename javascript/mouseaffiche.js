
function mouseaffichage(id,idtext,textplus,textmoin){

    var display =  $(id).css("display");

    if(display!="none")
    {

        $("#"+idtext).text(textplus);

        $(id).attr("style", "display:none");

    }else{

        $("#"+idtext).text(textmoin);

        $(id).attr("style", "display:block");

    }

}