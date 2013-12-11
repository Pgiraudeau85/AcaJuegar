<?php
//phpinfo();

function __autoload($class) {
    $fichier = MVC . strtolower(str_replace('_', '/', $class)) . '.php';
    include($fichier);
}

//appel du controleur par défaut
if(MVC_A::get('c') === null) {
    $cVue = 'dashboard';
    $c = 'ROOT_C_Dashboard';
}else{
    $cVue=MVC_A::get('c');
    $c = 'ROOT_C_' . MVC_A::get('c');
}

//appel de l'action par défaut
if (MVC_A::get('a') === null) {
    $a = 'start';
}else{
    $a = MVC_A::get('a');
    
}
$vue=new MVC_Vue($cVue,$a);

$controleur = new $c($vue);

$controleur->$a();

$vue->display();
