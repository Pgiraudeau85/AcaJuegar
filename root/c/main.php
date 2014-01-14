<?php

class ROOT_C_Main extends MVC_Controleur {

    public function start() {
        if(isset($_SESSION['respuestas'])){
            unset($_SESSION['respuestas']);
        }
    }

    public function respuestas() {
        $_SESSION['respuestas'] = MVC_A::get('respuestas');
    }

    public function preguntas() { 
        //on cherche les questions
        $questionsQuery = ROOT_M_Question::getRandomQuestions();
        //on intitialise le tableau qui sera passé à la vue
        $questionsChoix = array();
        //on parcourt les questions pour chercher les choix
        foreach ($questionsQuery as $question) {
            $questions['question'] = $question;
            $questions['choix'] = ROOT_M_Choix::getChoixQuestion($question->id);
            shuffle($questions['choix']);
            //on ajoute la question au tableau contenant toutes les questions avec leur choix + réponse
            $questionsChoix[] = $questions;
        }
        $this->_vue->preguntas = $questionsChoix;
    }

    public function resultat() {
        $temps = time() - MVC_A::get('inputTiempo');
        if(MVC_A::get('inputRespuestas') != ''){
            $reponses = explode(';',MVC_A::get('inputRespuestas'));
        }else{
            $reponses = null;
        }
        $nbPreguntas = MVC_A::get('inputPreguntas');
        $nbBonneReponse = 0;
        //on détermine si la réponse est correcte pour chaque question
        for ($i = 0; $i < sizeof($reponses); $i++) {
            $questionsReponses = explode('_', $reponses[$i]);
            //$question = ROOT_M_Question::getQuestion($questionsReponses[0]);
            $choix = ROOT_M_Choix::getChoix($questionsReponses[1]);
            //si oui on incrémente le nombre de bonne réponse
            if ($choix->determinerBonneReponse()) {
                $nbBonneReponse ++;
            }
        }
        if(sizeof($reponses)>0){
            //$score = round(($nbBonneReponse / $nbPreguntas) * (TEMPS_JEU - $temps));
            $score = round(($nbBonneReponse / $nbPreguntas) * 100);
        }else{
            $score = 0;
        }
        $succes = ROOT_M_Succes::getSucces($temps, $nbBonneReponse);
        
        $this->_vue->nbBonneReponse = $nbBonneReponse;
        $this->_vue->nbQuestions = $nbPreguntas;
        $this->_vue->score = $score;
        $this->_vue->succes = array_reverse($succes);
    }

}
