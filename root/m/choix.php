<?php

class ROOT_M_Choix extends MVC_Table {
    protected $_table = 'choix';
    protected $_tableRow = 'ROOT_M_ChoixRow';
    
    public static function getChoixQuestion($choixId){
        return ROOT_M_Choix::getInstance()->where('question_id = ?',array($choixId));
    }
    
    public static function get($id){
        return ROOT_M_Choix::getInstance()->get($id);
    }
}