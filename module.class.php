<?php
class Module{
    private $id;
    private $naam;
    private $prijs;
    
    public function __construct($id,$naam,$prijs) {
        $this->id =$id;
        $this->naam = $naam;
        $this->prijs = $prijs;
    }
    
    public function getID(){
        return $this->id;
    }
    
    public function getNaam(){
        return $this->naam;
    }
    
    public function getPrijs(){
        return $this->prijs;
    }
    
    public function setNaam($naam){
        $this->naam = $naam;
    }
    
    public function setPrijs($prijs){
        $this->prijs =$prijs;
    }
}
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

