<?php

class ROOT_M_Question extends MVC_Table {
    protected $_table = 'question';
    protected $_tableRow = 'ROOT_M_QuestionRow';
    
    public static function getRandomQuestions(){
        //return ROOT_M_Question::getInstance()->select('SELECT * FROM question ORDER BY RANDOM() LIMIT 20',array());
        return ROOT_M_Question::getInstance()->select('SELECT * FROM question ORDER BY RAND() LIMIT 20',array());
    }
    
    public static function getQuestion($id){
        return ROOT_M_Question::getInstance()->get($id);
    }
}
