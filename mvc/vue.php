<?php
class MVC_Vue {
    private $_fichier;
    private $_data;
    
    function __construct($c,$a) {
        $this->_fichier = strtolower(ROOT.'v/'.$c.'/'.$a.'.php');
        $this->_data=array();
    }
    function display(){
        include($this->_fichier);
    }
    function __set($cle,$valeur){
        return $this->_data[$cle]=$valeur;
    }
    function __get($cle){
        return $this->_data[$cle];
    }

}
