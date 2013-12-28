<?php //var_dump($this->preguntas);     ?>
<div id="preguntas">
        <?php
        $numeroPregunta = 1;
        foreach ($this->preguntas as $pregunta) {
            $string = '<div id=' . $numeroPregunta . ' class="display">';
            $string .='Pregunta numero ' . $numeroPregunta . '<br/>';
            $string .= '¿ ' . $pregunta['question']->libelle . ' ?<br/>';
            $string .= '<div>';
            for ($i = 0; $i < sizeof($pregunta['choix']); $i++) {
                $string .= '<img style="width: 140px; height: 140px;" '
                        . 'src="../_/image/imgRep/' . $pregunta['question']->id . '_' . $pregunta['choix'][$i]->id . '.jpg" '
                        . 'id="' . $pregunta['question']->id . '_' . $pregunta['choix'][$i]->id . '"'
                        . 'onclick="seleccionar($(this),\'seleccion_' . $pregunta['question']->id . '\')" class="seleccion" />';
            }
            $string .= '</div>';
            $string .= '<label class="btn btn-info" onClick="siguiente(' . $numeroPregunta . ',\'preguntas\')" >Pregunta siguiente</label>';
            $string .= '</div>';
            echo $string;
            $numeroPregunta ++;
        }
        ?>
        <script> $('#1').toggleClass('display');</script>
</div>

<div class="row bottom">
    <div class="clock" style="margin:2em;"></div>
    <div class="message"></div>
</div>
