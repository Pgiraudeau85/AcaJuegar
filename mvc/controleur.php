<?php
class MVC_Controleur{
    protected $_vue;
    
    function __construct($vue) {
        $this->_vue = $vue;
    }

}