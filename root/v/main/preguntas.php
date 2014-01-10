<div class="progress progress-striped active">
    <div id="bar" class="bar"></div>
</div>
<div id="preguntas">
    <form action="?c=main&a=resultat" method="post">
        <?php
        $numeroPregunta = 1;
        foreach ($this->preguntas as $pregunta) {
            $string = '<div id=' . $numeroPregunta . ' class="display">'; //début div question
            $string .='Pregunta numero ' . $numeroPregunta . '<br/>';
            $string .= '¿ ' . $pregunta['question']->libelle . ' ?<br/>';
            $string .= '<div id="seleccion_' . $pregunta['question']->id . '">';//début div des réponses
            $string .= '<ul class="thumbnails">';
            for ($i = 0; $i < sizeof($pregunta['choix']); $i++) {
                $string .= '<li class="span3"><div class="thumbnail">';
                $string .= '<img style="width: 300px; height: 200px;" '
                        . 'src="../_/image/imgRep/' . $pregunta['choix'][$i]->id . '.jpg" '
                        . 'id="' . $pregunta['question']->id . '_' . $pregunta['choix'][$i]->id . '"'
                        . 'onclick="seleccionar(\'' . $pregunta['question']->id . '\',this)" class="seleccion" />';
                if ($pregunta['choix'][$i]->afficherLibelle) {
                    $string .= '<p>' . $pregunta['choix'][$i]->libelle . '</p>';
                }
                $string .= '</div></li>';
            }
            $string .= '</ul>';
            $string .= '</div>'; //fin div choix
            $string .= '<label class="btn btn-info" onClick="siguiente(' . $numeroPregunta . ',\'preguntas\')" >Pregunta siguiente</label>';
            $string .= '</div>'; //fin div question
            echo $string;
            $numeroPregunta ++;
        }
        ?>
        <input id="inputRespuestas" type="hidden" name="inputRespuestas"/>
        <input id="inputTiempo" type="hidden" name="inputTiempo" value="<?php echo time() ?>"/>
    </form>
    <script>
        $('#1').toggleClass('display');
        setTiempo(100);
    </script>
</div>


<!--
<div class="row bottom">
    <div class="clock" style="margin:2em;"></div>
    <div class="message"></div>
</div>
-->