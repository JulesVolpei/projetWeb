<?php

    class Utilisateur{
        private int $identifiant;
        private String $motDePasse;
        private String $nom;
        private String $premiereConnexion;
        private String $derniereConnexion;

        public function __construct(int $identifiant, String $motDePasse, String $nom, String $premiereConnexion, String $derniereConnexion){
            $this->identifiant = $identifiant;
            $this->motDePasse = $motDePasse;
            $this->nom = $nom;
            $this->premiereConnexion = $premiereConnexion;
            $this->derniereConnexion = $derniereConnexion;
        }

        public function getIdentifiant(){
            return $this->identifiant;
        }

        public function getMotDePasse(){
            return $this->motDePasse;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPremiereConnexion(){
            return $this->premiereConnexion;
        }

        public function getDerniereConnexion(){
            return $this->derniereConnexion;
        }

        public function setIdentifiant(int $identifiant){
            $this->identifiant = $identifiant;
        }

        public function setMotDePasse(String $motDePasse){
            $this->motDePasse = $motDePasse;
        }

        public function setNom(String $nom){
            $this->nom = $nom;
        }

        public function setPremiereConnexion(String $premiereConnexion){
            $this->premiereConnexion = $premiereConnexion;
        }

        public function setDerniereConnexion(String $derniereConnexion){
            $this->derniereConnexion = $derniereConnexion;
        }

        public function toString(){
            echo "Utilisateur[Identifiant : ", $this->identifiant, 
            ", MotDePasse : ", $this->motDePasse, 
            ", Nom : ", $this->nom, 
            ", PremiereConnexion : ", $this->premiereConnexion, 
            ", DerniereConnexion : ", $this->derniereConnexion, "]";
        }
    }