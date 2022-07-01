<?php

class weakness{
    private $weakness;
    private $multiplier;

   public function __construct($weakness, $multiplier){
    $this->weakness = $weakness;
    $this->multiplier = $multiplier;
   }

   public function getWeaknessType()
   {
       return $this->weakness;
   }

   public function getWeaknessValue()
   {
       return $this->multiplier;
   }
}