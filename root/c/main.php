<?php

class ROOT_C_Main extends MVC_Controleur {
    
    
    public function start(){
        var_dump(MVC_Connexion::get());
    }
    
}
