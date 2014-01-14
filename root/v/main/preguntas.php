<div>
    <div>
        <h4>Tiempo : </h4>
        <div class="progress progress-striped active">
            <div id="bar" class="bar"></div>
        </div>
    </div>
    <div>
        <div id="errorMessage">
        </div>
    </div>
    <div id="preguntas">
        <form action="?c=main&a=resultat" method="post">
            <?php
            $numeroPregunta = 1;
            $nbPreguntas = sizeof($this->preguntas);
            foreach ($this->preguntas as $pregunta) {
                $string = '<div id=' . $numeroPregunta . ' class="display">'; //début div question
                $string .='<h2>Pregunta numero ' . $numeroPregunta . '/' . $nbPreguntas . '</h2>';
                $string .= '<h3>¿ ' . $pregunta['question']->libelle . ' ?</h3>';
                $string .= '<div id="seleccion_' . $pregunta['question']->id . '">'; //début div des réponses
                $string .= '<div class="row-fluid"><ul class="thumbnails">';
                for ($i = 0; $i < sizeof($pregunta['choix']); $i++) {
                    $string .= '<li class="span3"><div class="thumbnail row text-center">';
                    $string .= '<img style="width: 300px; height: 200px;" '
                            . 'src="../_/image/imgRep/' . $pregunta['choix'][$i]->id . '.jpg" '
                            . 'id="' . $pregunta['question']->id . '_' . $pregunta['choix'][$i]->id . '"'
                            . 'onclick="seleccionar(\'' . $pregunta['question']->id . '\',this)" class="seleccion" '
                            . 'value="' . $pregunta['question']->id . '"/>';
                    if ($pregunta['choix'][$i]->afficherLibelle) {
                        $string .= '<p><i>' . $pregunta['choix'][$i]->libelle . '</i></p>';
                    }
                    $string .= '</div></li>';
                }
                $string .= '</ul></div>';
                $string .= '</div>'; //fin div choix
                $string .= '<label class="btn btn-info" onClick="siguiente(' . $numeroPregunta . ',\'preguntas\')" >Pregunta siguiente</label>';
                $string .= '</div>'; //fin div question
                echo $string;
                $numeroPregunta ++;
            }
            ?>
            <input id="inputRespuestas" type="hidden" name="inputRespuestas"/>
            <input id="inputTiempo" type="hidden" name="inputTiempo" value="<?php echo time() ?>"/>
            <input id="inputPreguntas" type="hidden" name="inputPreguntas" value="<?php echo $nbPreguntas ?>"/>
        </form>
        <script>
            $(document).ready(function() {
                $('#1').removeClass('display');
                setTiempo(<?php echo TEMPS_JEU; ?>);
                actionZone('.thumbnail');
            });
        </script>
    </div>
</div>
