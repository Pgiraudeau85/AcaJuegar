<?php

//gérer l'affichage du résultat

var_dump($this->nbBonneReponse);
var_dump($this->nbQuestions);
var_dump($this->score);
var_dump($this->succes);
?>
<?php foreach($this->succes as $succes): ?>
    <div class="well well-small">
        <?php echo $succes->libelle; ?>
    </div>
<?php endforeach; ?>