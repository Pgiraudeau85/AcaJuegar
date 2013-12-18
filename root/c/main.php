<?php

class ROOT_C_Main extends MVC_Controleur {
    
    
    public function index(){
    }
    
    public function sessionQuestion(){
        $_SESSION['reponses'][] = MVC_A::get('element');
    }
    
    public function start(){      
        //on cherche les questions
        $questionsQuery = ROOT_M_Question::getRandomQuestions();       
        //on intitialise le tableau qui sera passé à la vue
        $questionsChoix = array();
        //on parcourt les questions pour chercher les choix
        foreach($questionsQuery as $question){
            $questions['question'] = $question;
            $questions['choix'] = ROOT_M_Choix::getChoixQuestion($question->id);
            //on ajoute la question au tableau contenant toutes les questions avec leur choix + réponse
            $questionsChoix[] = $questions;
        }
        $this->_vue->preguntas = $questionsChoix;
    }
    
    public function resultat(){
        $temps = MVC_A::get('temps');
        $reponses = $_SESSION['reponses'];
        $nbBonneReponse = 0;
        //on détermine si la réponse est correcte pour chaque question
        for($i = 0 ; $i < sizeof($reponses) ; $i++){
            $question = ROOT_M_Question::getQuestion($reponses[$i][0]);
            $choix = ROOT_M_Choix::getChoix($reponses[$i][1]);
            //si oui on incrémente le nombre de bonne réponse
            if($choix->determinerBonneReponse($question->id)){
                $nbBonneReponse ++;
            }
        }     
        //TODO gérer le score + les badges
        $this->_vue->nbBonneReponse = $nbBonneReponse;
        $this->_vue->nbQuestions = sizeof($reponses);
    }
    
}
