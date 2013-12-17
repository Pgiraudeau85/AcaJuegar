<?php
echo 'El juego empienza';

var_dump($this->questions);

//initialisée une variable de temps (temps de jeu 10 min)
//on aura x formulaires (x correspondant aux nb de questions)
//chaque formulaire sera gérée par jquery avec la méthode .submit()
//chaque réponse sera enregistrée dans une variable de session:
//[0] ->
//    [0] -> idQuestion
//    [1] -> idChoix
//[1] ->
//    [0] -> idQuestion
//    [1] -> idChoix
//...
//puis les résultats seront traitées
//plugin jquery pour afficher les formulaires / gérer les réponses
?>
<script> var numeroQuestion = 1 ;</script>
<?php foreach ($this->questions as $question): ?>
    <form id="<?php echo $question['question']->id ?>">
        Pregunta N° <script> document.write(numeroQuestion);</script>: <?php echo $question['question']->libelle ;?><br/>
        <?php for($i = 0 ; $i < sizeof($question['choix']);$i++): ?>
        <input type="radio" name="<?php echo $question['question']->id ?>" value="<?php echo $question['choix'][$i]->id ?>"/>
            <?php echo $question['choix'][$i]->libelle ?><br/>
        <?php endfor ?>
    </form>
    <script> var numeroQuestion ++ ;</script>
<?php endforeach; ?>

