<?php

class ROOT_M_Succes extends MVC_Table {

    protected $_table = 'succes';
    protected $_tableRow = 'ROOT_M_SuccesRow';

    public static function getSucces($temps, $nbBonneReponse) {
        return ROOT_M_Succes::getInstance()->where('nbQuestion <= ? OR temps >= ?', array($nbBonneReponse, $temps));
    }

}
