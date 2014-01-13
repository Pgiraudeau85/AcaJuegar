<h3>Resumen :</h3>
<p>
    Nombre de buenas respuestas : <?php echo $this->nbBonneReponse; ?><br>
    Nombre de pregunatas : <?php echo $this->nbQuestions; ?><br>
    <!-- Resultado : <?php echo $this->score; ?> puntos<br> -->
</p>
<h3>Exitos :</h3>
<?php foreach($this->succes as $succes): ?>
    <div class="well well-small">
        <?php echo $succes->libelle; ?>
    </div>
<?php endforeach; ?>

<button class="btn btn-large btn-info" onClick="document.location.href='?c=main&a=start'" type="button">Vovler a jugar</button>