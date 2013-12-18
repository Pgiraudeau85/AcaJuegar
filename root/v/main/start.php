<?php //var_dump($this->preguntas);   ?>
<div id="preguntas">
    <form>
        <?php
        $numeroPregunta = 1;
        foreach ($this->preguntas as $pregunta) {
            $string = '<div id=' . $numeroPregunta . '>';
            $string .='Pregunta numero ' . $numeroPregunta . '<br/>';
            $string .= $pregunta['question']->libelle . '<br/>';
            $string .= '<input type="hidden" name="seleccionId" value="' . $pregunta['question']->id . '"/>';
            for ($i = 0; $i < sizeof($pregunta['choix']); $i++) {
                $string .= '<img src="../_/image/imgRep/' . $pregunta['question']->id . '_' . $pregunta['choix'][$i]->id . '" value="' . $pregunta['choix'][$i]->id . '"/>';
            }
            $string .= '</div>';
            echo $string;
            $numeroPregunta ++;
        }
        ?>
    </form>
</div>

<div class="row bottom">
    <div class="clock" style="margin:2em;"></div>
    <div class="message"></div>
</div>
