<?php 
    class Ans{
        private $id;
        private $option;
        private $remenber;
        public function __construct($id,$option,$remenber){
            $this->id = $id;
            $this->option = $option;
            $this->remenber = $remenber;
        }
        public function getId(){
            return $this->id;
        }
        public function getOption(){
            return $this->option;
        }
        public function getRemenber(){
            return $this->remenber;
        }

    }
    class Question{
        private $id;
        private $question;
        private $optios;
        private $idCorrectAns;
        private $idUserAns;
        private $points;
        public function __construct($id,$question,$option,$idCorrectAns,$points){
            $this->id = $id;
            $this->question = $question;
            $this->optios = $option;
            $this->idCorrectAns = $idCorrectAns;
            $this->points = $points;
        }
        public function setUserAns($userAns){
            $this->idUserAns = $userAns;
        }
        public function getId(){
            return  $this->id;
        }
        public function getQuestion(){
            return $this->question;
        }
        public function getOptios(){
            return $this->optios;
        }
        public function getPoints(){
            if($this->idCorrectAns == $this->idUserAns)
                return $this->points;
            else
                return 0;
        }

    }
?>