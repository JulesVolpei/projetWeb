<?php

    class Appreciation{
        private String $nomAuteur;
        private int $note;
        private String $date;
        private String $commentaire;

        public function __construct(String $nomAuteur, int $note, String $date, String $commentaire){
            $this->nomAuteur = $nomAuteur;
            $this->note = $note;
            $this->date = $date;
            $this->commentaire = $commentaire;
        }

        public function getNomAuteur(){
            return $this->nomAuteur;
        }

        public function getNote(){
            return $this->note;
        }

        public function getDate(){
            return $this->date;
        }

        public function getCommentaire(){
            return $this->commentaire;
        }

        public function setNomAuteur(String $nomAuteur){
            $this->nomAuteur = $nomAuteur;
        }

        public function setNote(int $note){
            $this->note = $note;
        }

        public function setDate(String $date){
            $this->date = $date;
        }

        public function setCommentaire(String $commentaire){
            $this->commentaire = $commentaire;
        }

        public function toString(){
            echo "Appréciation[NomAuteur : ", $this->nomAuteur, ", Note : ", $this->note, "/10", ", Date : ", $this->date, 
            ", Commentaire : ", $this->commentaire, "]";
        }
    }