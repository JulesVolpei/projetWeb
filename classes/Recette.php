<?php

    class Recette {
        private int $noteMoyenne;
        private $photo;
        private $ingredients = array();
        private $ustensiles = array();
        private int $tempsPreparation;
        private String $difficulte;
        private int $cout;
        private String $description;

        public function __construct(int $noteMoyenne, $photo, $ingredients, $ustensiles, int $tempsPreparation, String $difficulte, int $cout, String $description) {
            $this->noteMoyenne = $noteMoyenne;
            $this->photo = $photo;
            $this->ingredients = $ingredients;
            $this->ustensiles = $ustensiles;
            $this->tempsPreparation = $tempsPreparation;
            $this->difficulte = $difficulte;
            $this->cout = $cout;
            $this->description = $description;
        }

        public function getNoteMoyenne() {
            return $this->noteMoyenne;
        }

        public function setNoteMoyenne($noteMoyenne) {
            $this->noteMoyenne = $noteMoyenne;
        }

        public function getPhoto() {
            return $this->photo;
        }

        public function setPhoto($photo) {
            $this->photo = $photo;
        }

        public function getIngredients() {
            foreach($this->ingredients as $ingredient) {
                echo $ingredient, " ";
            }
        }

        public function setIngredients($ingredients) {
            $this->ingredients = $ingredients;
        }

        public function getUstensiles() {
            foreach($this->ustensiles as $ustensile) {
                echo $ustensile, " ";
            }
        }

        public function setUstensiles($ustensiles) {
            $this->ustensiles = $ustensiles;
        }

        public function getTempsPreparation() {
            return $this->tempsPreparation;
        }

        public function setTempsPreparation($tempsPreparation) {
            $this->tempsPreparation = $tempsPreparation;
        }

        public function getDifficulte() {
            return $this->difficulte;
        }

        public function setDifficulte($difficulte) {
            $this->difficulte = $difficulte;
        }

        public function getCout() {
            return $this->cout;
        }

        public function setCout($cout) {
            $this->cout = $cout;
        }

        public function getDescription() {
            return $this->description;
        }

        public function setDescription($description) {
            $this->description = $description;
        }

        public function toString(){
            echo "Recette[NoteMoyenne : ", $this->noteMoyenne, 
            ", Photo : ", $this->photo, 
            ", Ingredient : [", $this->getIngredients(), "]", 
            ", Ustensiles : [", $this->getUstensiles(), "]", 
            ", TempsPreparation : ", $this->tempsPreparation,
            ", Difficulte : ", $this->difficulte,
            ", Cout : ", $this->cout,
            ", Description : ", $this->description, "]";
        }
    
    }