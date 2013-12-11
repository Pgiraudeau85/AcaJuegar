<?php

//phpinfo();

function __autoload($class) {
$fichier = MVC . strtolower(str_replace('_', '/', $class)) . '.php';
include($fichier);
}

//appel du controleur par défaut
$cVue = 'main';
$c = 'ROOT_C_Main';


//appel de l'action par défaut
$a = 'start';

$vue = new MVC_Vue($cVue, $a);

$controleur = new $c($vue);

$controleur->$a();

$vue->display();
