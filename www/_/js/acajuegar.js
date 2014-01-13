function error(){
    $('#errorMessage').html("<div class=\"alert alert-error\">¡ Huy ! No has respondido a la pregunta</div>");
}

/**
 - * permite de seleccionar un seleccion
 - * @param {int} id
 - * @returns {void}
 - */

function seleccionar(id,imgSeleccionada) {
    $div = $('#seleccion_' + id);
    $imgs = $div.find('img');
    nbImageSeleccionada = 0;
    //eleminar el seleccion anterior
    for (i = 0; i < $imgs.length; i++) {
        $($imgs[i]).removeClass("seleccionada");
    }
    $(imgSeleccionada).toggleClass("seleccionada");
}

/**
 - * 
 - * @param {int} id
 - * @param {string} divP
 - * @returns {}
 - */
function siguiente(id, divP) {
    $divP = $('#' + divP);
    $div = $('#' + id);
    id = id + 1;
    $divSigiuente = $('#' + id);    
    
    //si hay una respuesta
    hayRespuesta = false;
    $imgs = $div.find('img');
    for( i=0 ; i < $imgs.length; i++) {
        if($($imgs[i]).hasClass("seleccionada")) {
            hayRespuesta = true;
            break;
        }
    }
    if(hayRespuesta){
        //si hay una pregunta sigiuente
        if ($divP.find($divSigiuente).length === 1) {
            $div.toggleClass('display');
            $divSigiuente.toggleClass('display');
            if($('#errorMessage').html(""));
            //sino enviar el forma
        } else {
            enviarForma();
        }
    }else{
        error();
    }
}
/**
 - * enviar el forma
 - * @returns {void}
 - */
function enviarForma() {
    $imgs = $('.seleccionada');
    console.log($imgs);
    var result = '';
    for (i = 0; i < $imgs.length; i++) {
        result += ';' + $($imgs[i]).attr('id');
    }
    console.log(result);
    $('#inputRespuestas').val(result.substring(1));
    $('form').submit();
}

/**
* permite a definir el tiempo para hacer el juego
*/
function setTiempo(tiempo) {  
    var temp = 0;
    for (i = tiempo ;i > 0;i--) {
        setTimeout("$('#bar').css('width','" + ((tiempo - i) / tiempo) * 100 + "%')", temp);
        temp += 1000;
    }
    //al fin del tiempo
    setTimeout('enviarForma()', temp += 1000);
}

