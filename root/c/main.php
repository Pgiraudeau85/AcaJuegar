<?php

class ROOT_C_Main extends MVC_Controleur {
    
    
    public function index(){
    }
    
    public function start(){
        $this->_vue->questions = json_encode(ROOT_M_Question::getRandomQuestions());
    }
    
}
