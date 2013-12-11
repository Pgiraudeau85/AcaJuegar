<?php

class ROOT_M_Question extends MVC_Table {
    protected $_table = 'question';
    protected $_tableRow = 'ROOT_M_QuestionRow';
    
    public static function getRandomQuestions(){
        return ROOT_M_Choix::getInstance()->where('ORDER BY RANDOM() LIMIT 20',array());
    }
}
