/**
 - * permite de seleccionar un seleccion
 - * @param {object} e = this
 - * @param {int} id
 - * @returns {void}
 - */

function seleccionar(e, id) {
    $div = e.parent();
    $imgs = $div.find('img');
    nbImageSeleccionada = 0;
    //eleminar el seleccion anterior
    for (i = 0; i < $imgs.length; i++) {
        $($imgs[i]).removeClass("seleccionada");
    }
    e.toggleClass("seleccionada");

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
    $div.css('display', 'none');
    //si hay una pregunta sigiuente
    if ($divP.find($divSigiuente).length === 1) {
        $div.toggleClass('display');
        $divSigiuente.toggleClass('display');
        //sino enviar el forma
    } else {
        enviarForma();
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
