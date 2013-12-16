<?php

class ROOT_M_ChoixRow extends MVC_TableRow {

 public function determinerBonneReponse($questionId){
        if(ROOT_M_Choix::getInstance()->where('question_id = ? and estReponse = true',array($questionId))){
            return true;
        }else{
            return false;
        }
    }
    
}