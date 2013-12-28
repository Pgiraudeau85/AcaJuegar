<?php

class ROOT_M_ChoixRow extends MVC_TableRow {

 public function determinerBonneReponse(){
        if(ROOT_M_Choix::getInstance()->whereFirst('id = ? and estReponse = true',array($this->id)) != null){
            return true;
        }else{
            return false;
        }
    }
    
}