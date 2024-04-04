<?php

trait HasIngredients {
    protected $ingredients;

    public function getIngredients() {
        return $this->ingredients;
    }

    public function setIngredients($ingredients) {
        $this->ingredients = $ingredients;
    }
}